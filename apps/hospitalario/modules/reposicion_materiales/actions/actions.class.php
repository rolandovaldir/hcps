<?php

require_once dirname(__FILE__).'/../lib/reposicion_materialesGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/reposicion_materialesGeneratorHelper.class.php';

/**
 * reposicion_materiales actions.
 *
 * @package    hcps
 * @subpackage reposicion_materiales
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class reposicion_materialesActions extends autoReposicion_materialesActions
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
    
    public function executeNew(sfWebRequest $request)
    {
        $this->form = $this->configuration->getForm();
        $this->solicitud_reposicion_material = $this->form->getObject();
        $internado = $this->getUser()->getAttribute('internado');
        $this->form->setDefault('internado_id', $internado->getId());
    }
    
    protected function getFilters()
    {   
        $filters = parent::getFilters();        
        $filters['internado_id'] = is_object($this->hcps_internado) ? $this->hcps_internado->getId() : array();
        return $filters;
    }
    
    
    public function executeDeleteItem(sfWebRequest $request)
    {        
        $request->checkCSRFProtection();
        
        $objectD = Doctrine::getTable('DetalleMaterial')->find($request->getParameter('id'));
                        
        if (is_object($objectD) && $objectD->delete())
        {
            $this->getUser()->setFlash('notice', 'The item was deleted successfully.');
        }
        $this->redirect(array('sf_route' => 'solicitud_reposicion_material_edit', 'id' => $objectD->getSolicitudReposicionMaterial(),  'internado_id'=> $request->getParameter('internado_id')));
                
    }
    
public function executeExportPdf(sfWebRequest $request)
    {
        // HTML
        $formulario = $this->getPartial('reposicion_materiales/reposicion_material',
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

        $pdf->setTituloForm('SOLICITUD DE REPOSICIÓN DE MATERIALES');
        $pdf->setFontSizeTituloForm('14');
//        $pdf->setCodigoForm('SM - 5a');
        
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
        $pdf->Output('reposicion_material'.'.pdf', 'I');

        // Stop symfony process
        throw new sfStopException();
    }
}
