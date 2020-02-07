<?php
	$pdf = new Pdf('P', 'mm', 'Legal', true, 'UTF-8', false);
	$pdf->SetTitle('Kontrak kerja karyawan');
	// $pdf->SetTopMargin(20);
	// $pdf->setFooterMargin(20);
	$pdf->SetAutoPageBreak(true);
  // remove default header/footer
  $pdf->setPrintHeader(false);
  $pdf->setPrintFooter(false);
	$pdf->SetAuthor('Author');
	$pdf->SetDisplayMode('real', 'default');
  // SetMargins($left,$top,$right = -1,$keepmargins = false)
  $pdf->setCellHeightRatio(1.1);
  $pdf->SetMargins(30, 30.5, 20.1, true);
	$pdf->AddPage();
  // set font
  $pdf->SetFont('times', 'BU', 11);
	$pdf->Write(5, 'PERJANJIAN KONTRAK KERJA', '', 0, 'C', true, 0, false, false, 0);

  $pdf->SetFont('times', '', 11);
  $pdf->Write(5, '', '', 0, '', true, 0, false, false, 0);
    $pdf->Write(5, '', '', 0, '', true, 0, false, false, 0);
  $pdf->Write(5, 'Yang bertanda tangan di bawah ini :', '', 0, '', true, 0, false, false, 0);

  $pdf->SetFont('times', '', 11);
  // Set some content to print
$html = <<<EOD
1. &nbsp;Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;Nur Wahyudi <br/>
&nbsp;&nbsp;&nbsp;&nbsp; Jabatan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;Ka. Personalia <br/>
&nbsp;&nbsp;&nbsp;&nbsp; Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;Jl. Ir. Sutami Blok C No. 1 & 5 Samarinda 75126.
EOD;
  $pdf->Write(5, '', '', 0, '', true, 0, false, false, 0);
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
  $pdf->Write(5, '', '', 0, '', true, 0, false, false, 0);

$htm = <<<EOD
    <span align="justify">Dalam hal ini karena jabatannya bertindak untuk dan atas nama perusahaan  PT. Anugrah Distrindojaya Sentosa berkedudukan di Samarinda. Selanjutnya dalam perjanjian ini disebut <b>Pihak Pengusaha.</b>  </span>
EOD;
$pdf->writeHTMLCell(0, 0, '', '', $htm, 0, 1, 0, true, '', true);
  $pdf->Write(5, '', '', 0, '', true, 0, false, false, 0);
		foreach ($data_karyawan as $row)
		{
			foreach ($jabatan as $data_jabatan) {
				// code...

$html1 = '

2. &nbsp;Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;'.$row['nama_karyawan'].' <br/>
&nbsp;&nbsp;&nbsp;&nbsp; Jabatan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;'.$data_jabatan->nama_jabatan.' <br/>
&nbsp;&nbsp;&nbsp;&nbsp; Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;'.$row['alamat'].'.
';


// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html1, 0, 1, 0, true, '', true);
$pdf->Write(5, '', '', 0, '', true, 0, false, false, 0);
$html2 = <<<EOD
<span align="justify">Dalam hal ini bertindak untuk atas nama sendiri, selanjutnya disebut sebagai <b>Pihak Karyawan.</b> <br/><br/>

Dengan penuh kesadaran dan didasari oleh niat baik untuk saling bekerja sama demi terjalinnya hubungan kerja yang harmonis dan selaras bagi tercapainya tujuan bersama, maka dengan ini kami, Pihak Pengusaha dan Pihak Karyawan menyatakan sepakat untuk saling mengikatkan diri dalam suatu PERJANJIAN KONTRAK KERJA yang mengatur hak-hak dan kewajiban kedua belah pihak, kondisi dan syarat-syarat kerja serta tata tertib dan disiplin kerja yang berlandaskan kepada Peraturan Perusahaan dan Peraturan Pemerintah yang  berlaku , yang isinya adalah sebagai berikut :<br/></span>
EOD;
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html2, 0, 1, 0, true, '', true);
  $pdf->SetFont('times', 'B', 11);
  $pdf->Write(5, 'STATUS KARYAWAN', '', 0, 'C', true, 0, false, false, 0);
  $pdf->SetFont('times', '', 11);
  $pdf->Write(5, 'Pasal 1', '', 0, 'C', true, 0, false, false, 0);
  $pdf->Write(5, '', '', 0, 'C', true, 0, false, false, 0);
$html3 = <<<EOD

    <ol  >
      <li><span align="justify">Pengusaha menerima KARYAWAN sebagai karyawan kontrak terhitung mulai tanggal 10 Juni 2014 sampai dengan 10 Juni 2016  dengan jabatan sebagai Administrasi Gudang. <br/>
      </span>
      </li>
      <li><span align="justify">Sesuai dengan kebutuhan Pengusaha dan setelah mempertimbangkan berbagai aspek menyangkut kualifikasi termasuk bidang keahlian, pengalaman dan kemampuan kerja karyawan, pengusaha memutuskan menempatkan karyawan pada posisi/jabatan/bidang perkerjaan/unit kerja yang tercantum dalam point 1 di atas.
      </span></li>
    </ol>
EOD;
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html3, 0, 1, 0, true, '', true);

$pdf->Write(5, '', '', 0, '', true, 0, false, false, 0);
$pdf->SetFont('times', 'B', 11);
$pdf->Write(5, 'MASA BERLAKUNYA PERJANJIAN KONTRAK KERJA', '', 0, 'C', true, 0, false, false, 0);
$pdf->SetFont('times', '', 11);
$pdf->Write(5, 'Pasal 2', '', 0, 'C', true, 0, false, false, 0);
$pdf->Write(5, '', '', 0, 'C', true, 0, false, false, 0);
$html4 = <<<EOD
<ol>
    <li><span align="justify">Masa berlakunya perjanjian KONTRAK KERJA ini sesuai dengan pasal 1 point 1, namun dalam pelaksanaannya perjanjian kontrak kerja ini dapat berakhir apabila :<br/>
    </span>
        <ol type="a">
            <li><span align="justify">Pengusaha memutuskan hubungan kerja dengan karyawan karena alasan-alasan tertentu seperti pelanggaran terhadap Peraturan Perusahaan serta perundang-undangan yang berlaku.</span></li>
            <li><span align="justify">Karyawan memutuskan hubungan kerja dengan pengusaha dengan pemberitahuan kepada pengusaha 1 (satu) bulan sebelumnya.</span></li>
            <li><span align="justify">Karyawan terlibat masalah kriminalitas dan atau kantibmas yang berakibat harus berhubungan dengan pihak berwajib.</span></li>
        </ol>
    </li>
</ol>
EOD;
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html4, 0, 1, 0, true, '', true);

$pdf->AddPage();
$pdf->SetFont('times', 'B', 11);
$pdf->Write(5, 'WAKTU KERJA DAN KERJA LEMBUR', '', 0, 'C', true, 0, false, false, 0);
$pdf->SetFont('times', '', 11);
$pdf->Write(5, 'Pasal 3', '', 0, 'C', true, 0, false, false, 0);
$pdf->Write(5, '', '', 0, 'C', true, 0, false, false, 0);
$html5 = <<<EOD
  <ol>
    <li><span align="justify">Karyawan bersedia bekerja sesuai dengan waktu/jam kerja sebagaimana diatur oleh pengusaha.
    </span>
    </li>
    <li><span align="justify">Karyawan non-staff tetapi tergabung dalam team penjualan ( TO, Collector, Sales Kanvaser, Sopir Kanvaser, Helper Kanvaser ) kelebihan jam kerja normal sebagaimana tercantum dalam Peraturan Perusahaan tidak diperhitungkan sebagai kerja lembur, karena kelebihan jam kerja tersebut akan dikompensasikan ke dalam incentive.
    </span></li>
    <li><span align="justify">Ketentuan tentang kerja lembur dan perhitungan upah lembur sesuai dengan peraturan yang berlaku bagi karyawan yang berhak untuk mendapatkannya.
    </span></li>
  </ol>
EOD;
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html5, 0, 1, 0, true, '', true);
$pdf->Write(5, '', '', 0, 'C', true, 0, false, false, 0);
$pdf->SetFont('times', 'B', 11);
$pdf->Write(5, 'RENUMERASI ATAU PENGGAJIAN', '', 0, 'C', true, 0, false, false, 0);
$pdf->SetFont('times', '', 11);
$pdf->Write(5, 'Pasal 4', '', 0, 'C', true, 0, false, false, 0);
$pdf->Write(5, '', '', 0, 'C', true, 0, false, false, 0);
$html6 = '
  <ol>
    <li><span align="justify">Sebagai konsekuensi hubungan kontrak kerja dimaksud, karyawan bersedia bekerja dengan sungguh-sungguh, mentaati semua peraturan, disiplin dan tata tertib kerja dan berprestasi semaksimal mungkin. Dan sebagai imbalan jasa, perusahaan memberikan upah kepada pihak pekerja dengan ketentuan sebagai berikut :<br/>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gaji&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Rp. '.$data_jabatan->gaji_pokok.'<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TunjanganJabatan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Rp. 	   __<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tunjangan lain-lain&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Rp.	   __

    </span>
    </li>
    <li><span align="justify">Uang makan Rp.   -    / hari. Uang makan ini sifatnya hanya sebagai fasilitas yang tidak tetap dan dihitung sesuai dengan hari kehadiran karyawan.
    </span></li>
    <li><span align="justify">Gaji dibayarkan secara bulanan selambat-lambatnya tanggal 3 setiap bulan untuk waktu kerja yang telah dijalani.
    </span></li>
  </ol>
';
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html6, 0, 1, 0, true, '', true);
$pdf->Write(5, '', '', 0, 'C', true, 0, false, false, 0);
$pdf->SetFont('times', 'B', 11);
$pdf->Write(5, 'PERLINDUNGAN ASURANSI', '', 0, 'C', true, 0, false, false, 0);
$pdf->SetFont('times', '', 11);
$pdf->Write(5, 'Pasal 5', '', 0, 'C', true, 0, false, false, 0);
$pdf->Write(5, '', '', 0, 'C', true, 0, false, false, 0);
$html7 = <<<EOD
  <ol>
    <li><span align="justify">Karyawan di ikut sertakan dalam program Jaminan Asuransi Sosial Tenaga Kerja sesuai dengan peraturan Pemerintah UU No. 03/1992, yakni Program ( Jamsostek ).
    </span>
    </li>

  </ol>
EOD;
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html7, 0, 1, 0, true, '', true);
$pdf->Write(5, '', '', 0, 'C', true, 0, false, false, 0);
$pdf->SetFont('times', 'B', 11);
$pdf->Write(5, 'ATURAN DAN TATA TERTIB', '', 0, 'C', true, 0, false, false, 0);
$pdf->SetFont('times', '', 11);
$pdf->Write(5, 'Pasal 6', '', 0, 'C', true, 0, false, false, 0);
$pdf->Write(5, '', '', 0, 'C', true, 0, false, false, 0);
$html8 = <<<EOD
<ol>
    <li><span align="justify">Sebagai konsekuensi dari hubungan kontrak kerja sebagai mana di maksud dalam perjanjian ini, karyawan menyatakan sanggup dan bersedia :
        </span>
        <ol type="a">
            <li><span align="justify">Mematuhi semua peraturan baik tertulis maupun tidak tertulis ( norma-norma ) yang ditetapkan berlaku di perusahaan.</span></li>
            <li><span align="justify">Menjalankan semua kewajiban yang di berikan padanya.</span></li>
            <li><span align="justify">Mentaati tata tertib kerja dan menjaga ketertiban di tempat kerja.</span></li>
            <li><span align="justify">Mentaati semua larangan – larangan  sebagaimana  tertuang  dalam Peraturan Perusahaan.</span></li>
        </ol>
    </li>
</ol>
EOD;
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html8, 0, 1, 0, true, '', true);

$pdf->Write(5, '', '', 0, 'C', true, 0, false, false, 0);
$pdf->SetFont('times', 'B', 11);
$pdf->Write(5, 'TINDAKAN DISIPLIN', '', 0, 'C', true, 0, false, false, 0);
$pdf->SetFont('times', '', 11);
$pdf->Write(5, 'Pasal 7', '', 0, 'C', true, 0, false, false, 0);
$pdf->Write(5, '', '', 0, 'C', true, 0, false, false, 0);

$html9 = <<<EOD
  <ol >
    <li><span align="justify">Setiap pelanggaran peraturan dan tata tertib perusahaan atau bertingkah laku yang dapat merugikan perusahaan, pengusaha, atasan dan sesame rekan kerja dapat dikenakan sanksi atau tindakan disiplin sesuai sifat, jenis bobot dan besar kecilnya pelanggaran dan kesalahan yang dilakukan.
      </span>
    </li>
    <li><span align="justify">Ketentuan  mengenai  tindakan  disiplin seperti yang tertuang dalam Peraturan Perusahaan serta perundang-undangan yang berlaku.
      </span>
  </ol>
EOD;
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html9, 0, 1, 0, true, '', true);
$pdf->AddPage();

$html9 = <<<EOD
  <ol start="3">

    <li><span align="justify">Apabila karyawan melakukan pelanggaran sebagaimana dimaksud dalam Pasal 6 pada perjanjian kontrak kerja  ini, maka dengan ini karyawan tersebut menyatakan bersedia menerima sanksi atau tindakan disiplin apapun.
      </span>
    </li>
  </ol>
EOD;
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html9, 0, 1, 0, true, '', true);
$pdf->Write(5, '', '', 0, 'C', true, 0, false, false, 0);
$pdf->SetFont('times', 'B', 11);
$pdf->Write(5, 'PEMUTUSAN HUBUNGAN KERJA', '', 0, 'C', true, 0, false, false, 0);
$pdf->SetFont('times', '', 12);
$pdf->Write(5, 'Pasal 8', '', 0, 'C', true, 0, false, false, 0);
$pdf->Write(5, '', '', 0, 'C', true, 0, false, false, 0);
$html10 = <<<EOD
  <ol>
    <li><span align="justify">Perusahaan dapat memutuskn hubungan kerja dengan karyawan, apabila karyawan telah melanggar peraturan yang berlaku walaupun sudah di berikan peringatan baik lisan maupun tertulis.
      </span>
    </li>
    <li><span align="justify">Perusahaan dapat memutuskan hubungan kerja dengan karyawan apabila karyawan telah melakukan kesalahan berat atau melakukan tindakan yang di anggap merugikan perusahaan tanpa ada ganti rugi dari perusahaan.
      </span>
    </li>
    <li><span align="justify">Bila Karyawan mengundurkan diri  sebelum habis masa kontrak maka, karyawan harus membayar ganti rugi ke perusahaan yang besarnya akan di tentukan oleh perusahaan.
      </span>
    </li>
  </ol>
EOD;
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html10, 0, 1, 0, true, '', true);
$pdf->Write(5, '', '', 0, 'C', true, 0, false, false, 0);
$pdf->SetFont('times', 'B', 11);
$pdf->Write(5, 'PENYELESAIAN PERSELISIHAN', '', 0, 'C', true, 0, false, false, 0);
$pdf->SetFont('times', '', 12);
$pdf->Write(5, 'Pasal 9', '', 0, 'C', true, 0, false, false, 0);
$pdf->Write(5, '', '', 0, 'C', true, 0, false, false, 0);
$html11 = <<<EOD
  <ol>
    <li><span align="justify">Jika terjadi perselisihan mengenai hal-hal yang telah disepakati dalam perjanjian kontrak kerja ini, maka pengusaha dan karyawan sepakat akan menyelesaikannya secara kekeluargaan dengan tahapan sebagaimana diatur dalam Peraturan Perusahaan dan Peraturan Pemerintah yang berlaku.
        </span>
    </li>
  </ol>
EOD;
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html11, 0, 1, 0, true, '', true);
$pdf->Write(5, '', '', 0, 'C', true, 0, false, false, 0);
$pdf->SetFont('times', 'B', 11);
$pdf->Write(5, 'PEMUTUSAN HUBUNGAN KERJA', '', 0, 'C', true, 0, false, false, 0);
$pdf->SetFont('times', '', 12);
$pdf->Write(5, 'Pasal 10', '', 0, 'C', true, 0, false, false, 0);
$pdf->Write(5, '', '', 0, 'C', true, 0, false, false, 0);
$html10 = <<<EOD
    <span align="justify">Demikian perjanjian kontrak kerja  ini dibuat dan ditandatangani bersama setelah membaca dan memahami isinya dengan sadar dan dalam keadaan sehat jasmani dan rohani tanpa ada   paksaan ataupun tekanan dari pihak manapun.<br/><br/>
    Surat perjanjian kerja ini ditandatangani di atas kertas bermaterai cukup sehingga mempunyai kekuatan hukum yang sah dan masing-masing pihak mengaku telah menerima 1 ( satu ) eksemplar asli dari perjanjian kerja ini.
  </span>
EOD;
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html10, 0, 1, 0, true, '', true);
$html11 ='
    <span align="right">Samarinda, '.date('d F Y').'  </span>
';
$pdf->writeHTMLCell(0, 0, '', '', $html11, 0, 1, 0, true, '', true);

$pdf->SetFont('times', '', 12);

$pdf->Write(5, '', '', 0, 'C', true, 0, false, false, 0);
$pdf->Write(5, 'KAMI YANG TERIKAT DALAM PERJANJIAN,', '', 0, 'C', true, 0, false, false, 0);
$pdf->Write(5, '', '', 0, 'C', true, 0, false, false, 0);
$pdf->Write(5, '', '', 0, 'C', true, 0, false, false, 0);
$html12 ='


    <table cellpadding="0" cellspacing="0" border="0" style="text-align:center;">
    <tr>
      <td>PIHAK KARYAWAN,</td>
      <td></td>
      <td>PIHAK PENGUSAHA,</td>
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
      <td><u><b>'.$row['nama_karyawan'].'	</b></u></td>
      <td></td>
      <td><u><b>NUR WAHYUDI</b></u>	</td>
    </tr>
    </table>

'
;


$pdf->writeHTMLCell(0, 0, '', '', $html12, 0, 1, 0, true, '', true);
$pdf->Write(5, '', '', 0, 'C', true, 0, false, false, 0);

$pdf->Write(5, 'Cc. 1. Arsip.', '', 0, '', true, 0, false, false, 0);
$pdf->Write(5, '      2. Karyawan.', '', 0, '', true, 0, false, false, 0);
	$pdf->Output('kontrak_kerja_'.$row['nama_karyawan'].'.pdf', 'I');
	}}
?>
