<?php

class ImpresionPDF extends TCPDF 
{
    protected $titulo_form;
    protected $codigo_form;
    protected $font_size_titulo;
    
    public function setTituloForm($titulo = 'Formulario') {
        $this->titulo_form = $titulo;
    }
    
    public function setCodigoForm($titulo = '') {
        $this->codigo_form = $titulo;
    }
    
    public function setFontSizeTituloForm($size = '16') {
        $this->font_size_titulo = $size;
    }
    
    public function Header()
    {
        
        //$user = sfContext::getInstance()->getUser();
        
        $img = K_PATH_IMAGES.'logo-fondo-blanco.png';
        $this->Image($img, 10, 8, 21, '', 'PNG', '', 'T', false, true, '', false, false, 0, false, false, false);
        
        // Caja Petrolera
        $this->SetFont('helvetica', 'N', 15);
        $this->MultiCell(60, 0, 'Caja Petrolera de Salud', 0, 'L', 0, 0, 35, 8, true);
        
        // Codigo formulario
        $this->SetFont('helvetica', 'N', 15);
        $this->MultiCell(50, 0, $this->codigo_form, 1, 'R', 0, 0, 150, 8, true);
        
        // Sistema Informático Hospitalario
        $this->SetFont('helvetica', 'N', 11);
        $this->MultiCell(60, 0, 'Sistema Informático Hospitalario', 0, 'L', 0, 0, 35, 14, true);
        
        // Sistema Informático Hospitalario
        $this->SetFont('helvetica', 'N', $this->font_size_titulo);
        $this->MultiCell(165, 0, $this->titulo_form, 'B', 'L', 0, 0, 35, 21, true);
        
        //$this->MultiCell(50, 0, 'Regional '.$user->getAttribute('regional_nombre'), 0, 'R', 0, 0, 145, 8, true);
        
        //$this->Cell(89, 10, "Sistema de activos fijos", 0, 1,'C'); 
        
    }
}
?>
