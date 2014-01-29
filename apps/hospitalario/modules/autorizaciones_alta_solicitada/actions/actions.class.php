<?php

require_once dirname(__FILE__).'/../lib/autorizaciones_alta_solicitadaGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/autorizaciones_alta_solicitadaGeneratorHelper.class.php';

/**
 * autorizaciones_alta_solicitada actions.
 *
 * @package    hcps
 * @subpackage autorizaciones_alta_solicitada
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class autorizaciones_alta_solicitadaActions extends autoAutorizaciones_alta_solicitadaActions
{
    
    private $hcps_internado = null;

    public function preExecute()
    {        
        $this->hcps_internado = InternadoTable::getInstance()->find($this->getRequest()->getParameter('internado_id'));
        $siAlta = false;        
        if (is_object($this->hcps_internado)){
            if ($this->hcps_internado->getAlta()){
                if (!$this->getUser()->hasCredential('ver_historial'))
                {
                    $this->forward(sfConfig::get('sf_secure_module'),'secure');
                }
                $siAlta = true;                
            }            
        }
        else{ $siAlta = true; }//si es en reportes misma vista de pacientes dados de alta (sin opciones de edicion y eliminacion)

        $this->getUser()->addCredential($siAlta ? 'Alta' : 'noAlta');
        $this->getUser()->removeCredential($siAlta ? 'noAlta' : 'Alta');

        parent::preExecute();
    }
        
    public function postExecute()
    {
        if ( !is_object($this->hcps_internado) || $this->hcps_internado->getAlta()){
            if (is_object($this->form)){ //disable all widgets (si internado es dado de alta)
                $this->form->disableAllWidgets();
            }
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
    
    public function executeNew(sfWebRequest $request)
    {        
        parent::executeNew($request);        
        $this->form->setDefault('internado_id',$request->getParameter('internado_id'));
        //var_dump($this->form->getDefault('file_internacion_id'));
    }
    
    public function executeExportPdf(sfWebRequest $request)
    {
        /*
        //$user = $this->getUser();
        //echo $id = $user->getAttribute('id');
        $form = $this->getRoute()->getObject();
        */
        // estilos para este tipo de documento
        $css = file_get_contents(sfConfig::get('sf_root_dir') . '/web/css/impresion_autorizacion_pdf.css');
        $css = '<style>'.$css.'</style>';
        
        $html = $this->getPartial('autorizaciones_alta_solicitada/impresion_autorizacion', array());
        
        // PDF
        $config = sfTCPDFPluginConfigHandler::loadConfig();
                  sfTCPDFPluginConfigHandler::includeLangFile($this->getUser()->getCulture());

        // pdf object, reescrito
        $pdf = new sfTCPDF("P", PDF_UNIT, 'Letter', true, 'UTF-8');
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
        
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(0);
        
        $pdf->SetDisplayMode('real','default');  
        // quitar la linea del header
        $pdf->setHeaderData('',0,'','',array(0,0,0), array(255,255,255) );
        
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        
        // set default monospaced font
        $pdf->SetMargins(10, 8, 10);
        $pdf->SetFont('dejavusans', '', 11, '', true);
        
        $pdf->AddPage();
        $pdf->writeHTML($css.$html, true, false, false, false, '');

        // Close and output PDF document
        $pdf->Output('Formulario706.pdf', 'I');

        // Stop symfony process
        throw new sfStopException();
    }
}
