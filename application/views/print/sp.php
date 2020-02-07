<?php
	$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
	$pdf->SetTitle(''.$perihal.'');
	// $pdf->SetTopMargin(20);
	// $pdf->setFooterMargin(20);
	$pdf->SetAutoPageBreak(true);
  // remove default header/footer
  //$pdf->setPrintHeader(false);
  $pdf->setPrintFooter(false);
	$pdf->SetAuthor('Author');
	$pdf->SetDisplayMode('real', 'default');
  // SetMargins($left,$top,$right = -1,$keepmargins = false)
  $pdf->setCellHeightRatio(1.2);
  $pdf->SetMargins(30, 30.5, 20.1, true);
	$pdf->AddPage();
  // set font
  $pdf->SetFont('times', 'BU', 16);

	$pdf->Write(5, 'SURAT PERINGATAN', '', 0, 'C', true, 0, false, false, 0);

  $pdf->SetFont('times', '', 12);
$pdf->Write(5, '', '', 0, 'C', true, 0, false, false, 0);
  $html11 ='<span align="left">Samarinda, '.date('d F Y').'  </span>';
  $pdf->writeHTMLCell(0, 0, '', '', $html11, 0, 1, 0, true, '', true);
  	$pdf->Write(5, '', '', 0, 'C', true, 0, false, false, 0);
  $html11 ='<p>Nomor  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: '.$no_surat.'/'.$cabang.'-SAC/'.$singkatan_sp.'/ '.date('Y').'<br/>
Lampiran &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: -<br/>
Perihal  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: '.$perihal.'<br/>
<br/>
Yang bertanda tangan di bawah ini :<br/>
Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Nur Wahyudi <br/>
Jabatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Personalia<br/>
<br/>
Memberikan '.$perihal.' Kepada :<br/>
Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: '.$nama_karyawan.' <br/>
Jabatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: '.$nama_jabatan.'<br/></p>';
  $pdf->writeHTMLCell(0, 0, '', '', $html11, 0, 1, 0, true, '', true);
$html11 ='<p><span align="justify">Dengan Kronologi kesalahan sebagai berikut : <br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;Sesuai dengan Internal Memorandum No. 230/SAC-Smd/Person/2016 yang sudah diumumkan. Saudara tidak menjalankan Internal Memorandum tersebut dengan baik, salah satunya adalah dengan sengaja selalu terlambat masuk kerja. Maka dengan itu kami dari pihak perushaan memberikan sanksi tertulis yaitu '.$perihal.'.<br/><br/>
&nbsp;&nbsp;&nbsp;&nbsp;Saya mengharapkan dengan adanya '.$perihal.' ini dapat mendidik saudara serta dapat memperbaiki kesalahan – kesalahan tersebut dimasa yang akan datang dan tidak mengulanginya lagi.<br/><br/>
Note : Surat peringatan ini berlaku selama 3 bulan.</span></p>';
$pdf->writeHTMLCell(0, 0, '', '', $html11, 0, 1, 0, true, '', true);
$pdf->Write(5, '', '', 0, 'C', true, 0, false, false, 0);
$html12 ='
    <table cellpadding="0" cellspacing="0" border="0" style="text-align:left;">
    <tr>
      <td>yang membuat,</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td><u>Nur Wahyudi</u><br/>Personalia</td>
      <td></td>
      <td><u><b></b></u>	</td>
    </tr>

    </table>

'
;


$pdf->writeHTMLCell(0, 0, '', '', $html12, 0, 1, 0, true, '', true);

	$pdf->Output(''.$perihal.'_'.$nama_karyawan.'.pdf', 'I');

?>
