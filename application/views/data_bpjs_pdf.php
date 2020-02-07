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
        <h2>Data_bpjs List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>No Bpjs</th>
		<th>Status</th>
		<th>Kelas</th>
		<th>Id Karyawan</th>
		
            </tr><?php
            foreach ($data_bpjs_data as $data_bpjs)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $data_bpjs->no_bpjs ?></td>
		      <td><?php echo $data_bpjs->status ?></td>
		      <td><?php echo $data_bpjs->kelas ?></td>
		      <td><?php echo $data_bpjs->id_karyawan ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>