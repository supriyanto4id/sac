<?php
	$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
	$pdf->SetTitle('Pengalaman Kerja');
	// $pdf->SetTopMargin(20);
	// $pdf->setFooterMargin(20);
	$pdf->SetAutoPageBreak(true);
  // remove default header/footer
  //$pdf->setPrintHeader(false);
  $pdf->setPrintFooter(false);
	$pdf->SetAuthor('Author');
	$pdf->SetDisplayMode('real', 'default');
  // SetMargins($left,$top,$right = -1,$keepmargins = false)
  $pdf->setCellHeightRatio(1.15);
  $pdf->SetMargins(30, 30.5, 20.1, true);
	$pdf->AddPage();
  // set font
  $pdf->SetFont('times', 'BU', 16);
	$pdf->Write(5, 'PENGALAMAN KERJA', '', 0, 'C', true, 0, false, false, 0);
  $pdf->SetFont('times', '', 12);
  $html1 ='<span align="center">No. '.$no_surat.'/Person-'.$cabang.'/PK/ '.date('Y').'  </span>';
  $pdf->writeHTMLCell(0, 0, '', '', $html1, 0, 1, 0, true, '', true);
  $pdf->Write(5, '', '', 0, 'C', true, 0, false, false, 0);
  $html2 ='<p>Yang bertanda tangan di bawah ini :<br/>
  Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Nur Wahyudi <br/>
  Jabatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: MANAGER HRD<br/>
  <br/>
  Dengan ini menerangkan dengan sebenarnya kepada :<br/>
  Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: '.$nama_karyawan.'  <br/>
  Jabatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: '.$nama_jabatan.' <br/>
  Tanggal Masuk &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: '.$tanggal_masuk.' <br/>
  Tanggal Keluar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: '.$tanggal_keluar.'<br/>
  Alasan Keluar &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: '.$alasan_keluar.' <br/>
  </p>
  ';

  $pdf->writeHTMLCell(0, 0, '', '', $html2, 0, 1, 0, true, '', true);
    $pdf->setCellHeightRatio(2.0);
  $html3 ='<p><span align="justify">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nama tersebut diatas telah bekerja pada CV. SAC Bersaudara Samarinda, sesuai dengan pengunduran dirinya pertanggal '.$tanggal_keluar.', maka karyawan tersebut bukan lagi menjadi karyawan CV.SAC Bersaudara. Hal-hal yang mengenai hak dan kewajiban kedua belah pihak telah diselesaikan dengan baik, Selama menjadi karyawan telah menunjukkan dedikasi serta loyalitas kerja yang baik.<br/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kami atas nama managemen mengucapkan banyak terima kasih atas jasa-jasanya selama bekerja, demikian surat ini dibuat agar dapat dipergunakan sebagaimana mestinya.
</span></p>';
  $pdf->writeHTMLCell(0, 0, '', '', $html3, 0, 1, 0, true, '', true);
  $pdf->Write(5, '', '', 0, '', true, 0, false, false, 0);
  $pdf->Write(5, 'Ditetapkan di      : Samarinda', '', 0, '', true, 0, false, false, 0);
  $pdf->SetFont('times', 'U', 12);
  $pdf->Write(5, 'Tanggal 	            : '.date('d F Y').'', '', 0, '', true, 0, false, false, 0);
    $pdf->Write(5, '', '', 0, '', true, 0, false, false, 0);
  $pdf->setCellHeightRatio(1.15);
  $pdf->SetFont('times', '', 12);
  $html12 ='


      <table cellpadding="0" cellspacing="0" border="0" style="text-align:center;">
      <tr>
        <td>Hormat Kami,</td>
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
        <td><u><b>NUR WAHYUDI</b></u><br/>Manager HRD</td>
        <td></td>
        <td></td>
      </tr>
      </table>

  '
  ;


  $pdf->writeHTMLCell(0, 0, '', '', $html12, 0, 1, 0, true, '', true);
	$pdf->Output('pengalaman_kerja.pdf', 'I');

?>
