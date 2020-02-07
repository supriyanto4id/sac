<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Data_karyawan List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Karyawan</th>
		<th>Tempat Lahir</th>
		<th>Tgl Lahir</th>
		<th>Jenis Kelamin</th>
		<th>Alamat</th>
		<th>Agama</th>
		<th>Tgl Masuk</th>
		<th>Tgl Keluar</th>
		<th>No Npwp</th>
		<th>No Bpjs</th>
		<th>Status</th>
		
            </tr><?php
            foreach ($data_karyawan_data as $data_karyawan)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $data_karyawan->nama_karyawan ?></td>
		      <td><?php echo $data_karyawan->tempat_lahir ?></td>
		      <td><?php echo $data_karyawan->tgl_lahir ?></td>
		      <td><?php echo $data_karyawan->jenis_kelamin ?></td>
		      <td><?php echo $data_karyawan->alamat ?></td>
		      <td><?php echo $data_karyawan->agama ?></td>
		      <td><?php echo $data_karyawan->tgl_masuk ?></td>
		      <td><?php echo $data_karyawan->tgl_keluar ?></td>
		      <td><?php echo $data_karyawan->no_npwp ?></td>
		      <td><?php echo $data_karyawan->no_bpjs ?></td>
		      <td><?php echo $data_karyawan->status ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>