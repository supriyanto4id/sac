
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>DATA_KARYAWAN LIST <?php echo anchor('data_karyawan/create/','Create',array('class'=>'btn btn-danger btn-sm'));?>
              	
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Nama Karyawan</th>
		    <!-- <th>Tempat Lahir</th>
		    <th>Tgl Lahir</th> -->
		    <th>Jenis Kelamin</th>
		    <th>Alamat</th>
		    <!-- <th>Agama</th> -->
		    <th>Tgl Masuk</th>
		    <!-- <th>Tgl Keluar</th> -->
        <th>Status</th>
        <th>HRD Cek</th>
		    <th>Print SP</th>
		    <th>Print Kontrak</th>
        <th>Print Pengalaman Kerja</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($data_karyawan_data as $data_karyawan)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $data_karyawan->nama_karyawan ?></td>
		    <!-- <td><?php echo $data_karyawan->tempat_lahir ?></td>
		    <td><?php echo $data_karyawan->tgl_lahir ?></td> -->
		    <td><?php echo $data_karyawan->jenis_kelamin ?></td>
		    <td><?php echo $data_karyawan->alamat ?></td>
		    <!-- <td><?php echo $data_karyawan->agama ?></td> -->
		    <td><?php echo $data_karyawan->tgl_masuk ?></td>
		    <!-- <td><?php echo $data_karyawan->tgl_keluar ?></td>
		    <td><?php echo $data_karyawan->no_npwp ?></td>
		    <td><?php echo $data_karyawan->no_bpjs ?></td> -->
          <td><?php echo $data_karyawan->status ?></td>
          <!-- <td><?php echo $data_karyawan->direktur_cek ?></td> -->
          <td> <?php
           if ($data_karyawan->hrd_cek == 10 ){
              echo "Setuju";
            }else if  ($data_karyawan->hrd_cek == 11){
              echo "Tidak Setuju";
            }else if($data_karyawan->hrd_cek == 12){
              echo "Proses";
            }
           ?>

            <div id="autosavenotify"></div>
            <select class="status" >
            <option value='-1'>--Pilih--</option>

            <option value='10#<?php echo$data_karyawan->id_karyawan?>'>Setuju</option>
            <option value='11#<?php echo$data_karyawan->id_karyawan?>'>Tidak Setuju</option>
            <option value='12#<?php echo$data_karyawan->id_karyawan?>'>Proses</option>
            <h3 id="result"></h3>
          </select></td>
        <td>
          <?php
          if ($data_karyawan->hrd_cek == "10") {
            echo anchor(site_url('print_pdf/sp_satu/'.$data_karyawan->id_karyawan),'<i class="fa  fa-print"></i> SP 1', 'class="btn btn-primary btn-sm "');
            echo '  ';
            echo anchor(site_url('print_pdf/sp_dua/'.$data_karyawan->id_karyawan),'<i class="fa  fa-print"></i> SP 2', 'class="btn btn-primary btn-sm"');
            echo '  ';
            echo anchor(site_url('print_pdf/sp_tiga/'.$data_karyawan->id_karyawan),'<i class="fa  fa-print"></i> SP 3', 'class="btn btn-primary btn-sm"');
          }else {
        echo " Proses / belum setuju";
          }
           ?>
        </td>
        <td>
          <?php
            if ($data_karyawan->hrd_cek == "10") {
            echo anchor(site_url('print_pdf/kontrak_kerja/'.$data_karyawan->id_karyawan),'<i class="fa  fa-print"></i> Kontrak ', 'class="btn btn-primary btn-sm"');
          }else {
        echo " Proses/ belum setuju";
          }
           ?>
        </td>
        <td>
          <?php
            if ($data_karyawan->direktur_cek == "10") {
            echo anchor(site_url('print_pdf/pengalaman_kerja/'.$data_karyawan->id_karyawan),'<i class="fa  fa-print"></i> Pengalaman Kerja ', 'class="btn btn-primary btn-sm"');
          }else {
        echo " Proses/ belum setuju";
          }
           ?>
        </td>

		    <td style="text-align:center" width="140px">
			<?php
			echo anchor(site_url('data_karyawan/read_all_index/'.$data_karyawan->id_karyawan),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm'));
			echo '  ';
			echo anchor(site_url('data_karyawan/update/'.$data_karyawan->id_karyawan),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm'));
			echo '  ';
			echo anchor(site_url('data_karyawan/delete/'.$data_karyawan->id_karyawan),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
                    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
