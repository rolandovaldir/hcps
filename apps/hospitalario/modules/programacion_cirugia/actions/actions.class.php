<?php

require_once dirname(__FILE__).'/../lib/programacion_cirugiaGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/programacion_cirugiaGeneratorHelper.class.php';

/**
 * programacion_cirugia actions.
 *
 * @package    hcps
 * @subpackage programacion_cirugia
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class programacion_cirugiaActions extends autoProgramacion_cirugiaActions
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
                || !$this->getUser()->hasCredential(array('crear','medico'))){
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
    
    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        if(!$form->getObject()->isNew()){ exit(); }
        $vals = $request->getParameter($form->getName());                
        $vals['internado_id'] = $request->getParameter('internado_id');        
        $request->setParameter($form->getName(),$vals);
        parent::processForm($request, $form);
    }
       
    public function executeExportPdf(sfWebRequest $request)
    {
        /*
        //$user = $this->getUser();
        //echo $id = $user->getAttribute('id');
        $form = $this->getRoute()->getObject();
        */
        // estilos para este tipo de documento
        $css = file_get_contents(sfConfig::get('sf_root_dir') . '/web/css/programacion_cirujias_pdf.css');
        $css = '<style>'.$css.'</style>';
        
        $html = $this->getPartial('programacion_cirugia/impresion_programacion', array());
        
        // PDF
        $config = sfTCPDFPluginConfigHandler::loadConfig();
                  sfTCPDFPluginConfigHandler::includeLangFile($this->getUser()->getCulture());

        // pdf object, reescrito
        $pdf = new ImpresionPDF("P", PDF_UNIT, 'Letter', true, 'UTF-8');
        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('CPS');
        $pdf->SetTitle('CPS');
        $pdf->SetSubject('Caja Petrolera de Salud');
        $pdf->SetKeywords('TCPDF, PDF, impresion');
        
        // set default header data
//        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

        // set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        
        //$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM); 
        $pdf->SetAutoPageBreak(TRUE, 6);
        
//        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(0);
        
        $pdf->SetDisplayMode('real','default');  
        // quitar la linea del header
        //$pdf->setHeaderData('',20,'','',array(0,0,0), array(255,255,255) );
        
//        $pdf->setPrintHeader(false);
//        $pdf->setPrintFooter(false);
        
        // set default monospaced font
        $pdf->SetMargins(10, 35, 10);
        $pdf->SetFont('dejavusans', '', 11, '', true);
        
        $pdf->AddPage();
        $pdf->writeHTML($css.$html, true, false, false, false, '');

        // Close and output PDF document
        $pdf->Output('Formulario706.pdf', 'I');

        // Stop symfony process
        throw new sfStopException();
    }
    
    
}
