<?php

class ImpresionPDF extends TCPDF 
{
    //Page header
    public function Header() {
        // Logo
        $image_file = K_PATH_IMAGES.'cps/logo-cps.png';
        $this->Image($image_file, 10, 10, 15, '', 'PNG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('helvetica', 'B', 20);
        // Title
        $this->Cell(0, 15, 'Caja Petrolera de Salud', 0, false, 'C', 0, '', 0, false, 'M', 'M');
        
    }
}
?>
