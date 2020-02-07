<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';
class Pdf extends TCPDF
{
    function __construct()
    {
        parent::__construct();
    }
    //Page header
     public function Header() {
         // menentukan logo berdasrkan lokasi logo
         $image_file = K_PATH_IMAGES.'newlogo.jpg';
 		// membuat sebuah gambar dengan file gambar dari $image_file, koortdinat x=10, y=10, ukuran Width gambar 15, align T(top), dpi = 300
         $this->Image($image_file, 10, 2, 190, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
         // membuat tulisan dengan font helvetica, tebal, ukuran 10
         //$this->SetFont('helvetica', 'B', 10);
         // menentukan judul yang akan tampil. width=0, height=15, text=<< TCPDF CODEDB.CO >>, align=C(center)
      //   $this->Cell(0, 15, '<< TCPDF CODEDB.CO >>', 0, false, 'C', 0, '', 0, false, 'M', 'M');
     }

}
/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */
