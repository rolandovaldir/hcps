<?php

require_once dirname(__FILE__).'/../lib/uso_hospitalarioGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/uso_hospitalarioGeneratorHelper.class.php';

/**
 * uso_hospitalario actions.
 *
 * @package    hcps
 * @subpackage uso_hospitalario
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class uso_hospitalarioActions extends autoUso_hospitalarioActions
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
                || !$this->getUser()->hasCredential(array('crear','enfermera'))){
            $siAlta = true;
        }
        else { $siAlta = false; }
        
        $this->getUser()->addCredential($siAlta ? 'Alta' : 'noAlta');
        $this->getUser()->removeCredential($siAlta ? 'noAlta' : 'Alta');

        parent::preExecute();
    }
        
    public function postExecute()
    {
        if ($this->getUser()->hasCredential('Alta') && is_object($this->form)){            
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
        $vals = $request->getParameter($form->getName());        
        
        if ($form->getObject()->isNew()){        
            $vals['internado_id'] = $request->getParameter('internado_id');
        }        
        else{
            $vals['internado_id'] = $form->getObject()->getInternadoId();            
        }        
        
        $request->setParameter($form->getName(),$vals);        
        parent::processForm($request, $form);
        
    }
    
    public function executeDeleteItem(sfWebRequest $request)
    {        
        $request->checkCSRFProtection();
        
        $objectD = Doctrine::getTable('DetalleUsoHospitalario')->find($request->getParameter('id'));
                        
        if (is_object($objectD) && $objectD->delete())
        {
            $this->getUser()->setFlash('notice', 'The item was deleted successfully.');
        }
        $this->redirect(array('sf_route' => 'uso_hospitalario_edit', 'id' => $objectD->getUsoHospitalarioId(),  'internado_id'=> $request->getParameter('internado_id')));
                
    }
    
    public function executeExportPdf(sfWebRequest $request)
    {
        // HTML
        $formulario = $this->getPartial('uso_hospitalario/uso_hospitalario',
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

        $pdf->setTituloForm('USO HOSPITALARIO');
        $pdf->setFontSizeTituloForm('16');
        $pdf->setCodigoForm('SM - 5a');
        
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
        $pdf->Output('receta_uso_hospitalario'.'.pdf', 'I');

        // Stop symfony process
        throw new sfStopException();
    }
}
