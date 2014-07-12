<?php

require_once dirname(__FILE__).'/../lib/autorizaciones_diagnostico_tratamientoGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/autorizaciones_diagnostico_tratamientoGeneratorHelper.class.php';

/**
 * autorizaciones_diagnostico_tratamiento actions.
 *
 * @package    hcps
 * @subpackage autorizaciones_diagnostico_tratamiento
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class autorizaciones_diagnostico_tratamientoActions extends autoAutorizaciones_diagnostico_tratamientoActions
{
    private $hcps_internado = null;

    public function preExecute()
    {        
        $internado_id = $this->getRequest()->getParameter('internado_id',null);        
        if ($internado_id){
            $this->hcps_internado = InternadoTable::getInstance()->find($internado_id);
        }       
        
        if (is_object($this->hcps_internado) && !$this->getUser()->isSuperAdmin()){
            /*si el internado esta de alta solo los usuarios con permiso ver_historial 
              pueden ver los registros del intenado*/
            if ($this->hcps_internado->getAlta() && !$this->getUser()->hasCredential('ver_historial')){
                $this->forward(sfConfig::get('sf_secure_module'),'secure');
            }
            /*si el internado esta en una planta diferente del asignado al usuario
              solo los usuarios con permiso ver_toda_area pueden ver los registros del intenado*/
            if (!$this->getUser()->checkPlantaAllowedByCamaId($this->hcps_internado->getCamaId())
                && !$this->getUser()->hasCredential('ver_toda_area')){
                $this->forward(sfConfig::get('sf_secure_module'),'secure');
            }            
        }
        if (!is_object($this->hcps_internado) || $this->hcps_internado->getAlta() 
                || !$this->getUser()->hasCredential(array('crear'),array('medico', 'enfermera'))){
            $siAlta = true;
        }
        else { $siAlta = false; }
        
        $this->getUser()->addCredential($siAlta ? 'Alta' : 'noAlta');
        $this->getUser()->removeCredential($siAlta ? 'noAlta' : 'Alta');

        parent::preExecute();
    }
        
    public function postExecute()
    {
        if (is_object($this->form) && !$this->form->getObject()->isNew()){            
            $this->form->disableAllWidgets();
        }        
        parent::postExecute();        
    }
    
    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        if(!$form->getObject()->isNew()){ exit(); }
        $vals = $request->getParameter($form->getName());                
        $vals['internado_id'] = $request->getParameter('internado_id');        
        $request->setParameter($form->getName(),$vals);
        parent::processForm($request, $form);
    }
    
    /**
     * overwrite the filter to list only the rows for the chosen internado
     * @return string 
     */
    protected function getFilters()
    {   
        $filters = parent::getFilters();        
        $filters['internado_id'] = is_object($this->hcps_internado) ? $this->hcps_internado->getId() : array();
        return $filters;
    }    
    
//    public function executeExportPdf(sfWebRequest $request)
//    {
//        /*
//        //$user = $this->getUser();
//        //echo $id = $user->getAttribute('id');
//        $form = $this->getRoute()->getObject();
//        */
//        // estilos para este tipo de documento
//        $css = file_get_contents(sfConfig::get('sf_root_dir') . '/web/css/impresion_autorizacion_pdf.css');
//        $css = '<style>'.$css.'</style>';
//        
//        $html = $this->getPartial('autorizaciones_diagnostico_tratamiento/impresion_autorizacion', array());
//        
//        // PDF
//        $config = sfTCPDFPluginConfigHandler::loadConfig();
//                  sfTCPDFPluginConfigHandler::includeLangFile($this->getUser()->getCulture());
//
//        // pdf object, reescrito
//        $pdf = new sfTCPDF("P", PDF_UNIT, 'Letter', true, 'UTF-8');
//        // set document information
//        $pdf->SetCreator(PDF_CREATOR);
//        $pdf->SetAuthor('CPS');
//        $pdf->SetTitle('CPS');
//        $pdf->SetSubject('Caja Petrolera de Salud');
//        $pdf->SetKeywords('TCPDF, PDF, impresion');
//        
//        // set default header data
////        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
//
//        // set header and footer fonts
//        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
//        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
//        
//        //$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM); 
//        $pdf->SetAutoPageBreak(TRUE, 6);
//        
//        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
//        $pdf->SetFooterMargin(0);
//        
//        $pdf->SetDisplayMode('real','default');  
//        // quitar la linea del header
//        $pdf->setHeaderData('',0,'','',array(0,0,0), array(255,255,255) );
//        
//        $pdf->setPrintHeader(false);
//        $pdf->setPrintFooter(false);
//        
//        // set default monospaced font
//        $pdf->SetMargins(10, 8, 10);
//        $pdf->SetFont('dejavusans', '', 11, '', true);
//        
//        $pdf->AddPage();
//        $pdf->writeHTML($css.$html, true, false, false, false, '');
//
//        // Close and output PDF document
//        $pdf->Output('Formulario706.pdf', 'I');
//
//        // Stop symfony process
//        throw new sfStopException();
//    }
    
    public function executeExportPdf(sfWebRequest $request)
    {
        // HTML
        $formulario = $this->getPartial('autorizaciones_diagnostico_tratamiento/autorizacion_legal',
            array('datos' => 'd'));
        // obtenemos los estilos que se
        $css = file_get_contents(sfConfig::get('sf_root_dir') . '/web/css/formulario_medico_pdf.css');
        $css = '<style>'.$css.'</style>';
        
        // PDF
        // ------------------------------------
        $config = sfTCPDFPluginConfigHandler::loadConfig();
        sfTCPDFPluginConfigHandler::includeLangFile($this->getUser()->getCulture());

        // pdf object, reescrito
        $pdf = new ImpresionPDF("L", PDF_UNIT, 'A4', true, 'UTF-8');

        $pdf->setTituloForm('AUTORIZACIÓN LEGAL CON CONSENTIMIENTO INFORMADO');
        $pdf->setFontSizeTituloForm('15');
        //$pdf->setCodigoForm('DEPARTAMENTO DE ENFERMERIA');
        
        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Sistema Informatico Hospitalario');
        $pdf->SetTitle('HIS');
        $pdf->SetSubject('impresion');
        $pdf->SetKeywords('CPS, HIS');

        // set default header data
        //$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

        // set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        //set margins
        $pdf->SetMargins(15, 40, 15);
        
        // set margen del header hacia arriba
        $pdf->SetHeaderMargin(10);
        
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        //set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        //set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // ---------------------------------------------------------
        // set default font subsetting mode
        $pdf->setFontSubsetting(true);

        //$pdf->SetPrintHeader(true);
        
        // Add a page
        //$resolution= array(377, 279);
        //$resolution= array(351, 279);
        
        // This method has several options, check the source code documentation for more information.
        $pdf->AddPage('P', 'A4', false, false);
        //$pdf->Write(0, 'Titulo 1', '', 0, 'L', true, 0, false, false, 0);
        
        // -------------------------------------------------------------
        //foreach($html as $table)
        //{
            $pdf->writeHTML($css.$formulario, true, false, false, false, '');
        //}
        
        // ---------------------------------------------------------
        // Close and output PDF document
        $pdf->Output('autorizacion_diagnostico_tratamiento'.'.pdf', 'I');

        // Stop symfony process
        throw new sfStopException();
    }

}
