<?php

require_once dirname(__FILE__).'/../lib/autorizaciones_autopsiaGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/autorizaciones_autopsiaGeneratorHelper.class.php';

/**
 * autorizaciones_autopsia actions.
 *
 * @package    hcps
 * @subpackage autorizaciones_autopsia
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class autorizaciones_autopsiaActions extends autoAutorizaciones_autopsiaActions
{
    /**
     * overwrite the filter to list only the rows for the chosen internado
     * @return string 
     */
    protected function getFilters()
    {   
        $filters = parent::getFilters();        
        $filters['internado_id'] = sfContext::getInstance()->getRequest()->getParameter('internado_id');
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
        
        $html = $this->getPartial('autorizaciones_autopsia/impresion_autorizacion', array());
        
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
        $pdf->SetMargins(30, 8, 15);
        $pdf->SetFont('dejavusans', '', 11, '', true);
        
        $pdf->AddPage();
        $pdf->writeHTML($css.$html, true, false, false, false, '');

        // Close and output PDF document
        $pdf->Output('Formulario706.pdf', 'I');

        // Stop symfony process
        throw new sfStopException();
    }
}
