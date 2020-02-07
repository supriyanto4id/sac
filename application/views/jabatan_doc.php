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
        <h2>Jabatan List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama Jabatan</th>
		<th>Gaji Pokok</th>
		<th>T Jabatan</th>
		<th>T Bbm</th>
		<th>T Pulsa</th>
		<th>T Perumahan</th>
		<th>Uang Makan</th>
		<th>Insentif</th>
		<th>Job Disk</th>
		<th>Id Karyawan</th>
		
            </tr><?php
            foreach ($jabatan_data as $jabatan)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $jabatan->nama_jabatan ?></td>
		      <td><?php echo $jabatan->gaji_pokok ?></td>
		      <td><?php echo $jabatan->t_jabatan ?></td>
		      <td><?php echo $jabatan->t_bbm ?></td>
		      <td><?php echo $jabatan->t_pulsa ?></td>
		      <td><?php echo $jabatan->t_perumahan ?></td>
		      <td><?php echo $jabatan->uang_makan ?></td>
		      <td><?php echo $jabatan->insentif ?></td>
		      <td><?php echo $jabatan->job_disk ?></td>
		      <td><?php echo $jabatan->id_karyawan ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>