
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>JABATAN LIST <?php echo anchor('jabatan/create/','Create',array('class'=>'btn btn-danger btn-sm'));?>
		<?php echo anchor(site_url('jabatan/excel'), ' <i class="fa fa-file-excel-o"></i> Excel', 'class="btn btn-primary btn-sm"'); ?>
		<?php echo anchor(site_url('jabatan/word'), '<i class="fa fa-file-word-o"></i> Word', 'class="btn btn-primary btn-sm"'); ?>
		<?php echo anchor(site_url('jabatan/pdf'), '<i class="fa fa-file-pdf-o"></i> PDF', 'class="btn btn-primary btn-sm"'); ?></h3>
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Nama Jabatan</th>
		    <th>Gaji Pokok</th>
		    <th>T Jabatan</th>
		    <th>T Bbm</th>
		    <th>T Pulsa</th>
		    <th>T Perumahan</th>
		    <th>Uang Makan</th>
		    <th>Insentif</th>
		    <!-- <th>Job Disk</th> -->
		    <!-- <th>Id Karyawan</th> -->
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
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
		    <!-- <td><?php echo $jabatan->job_disk ?></td> -->
		    <!-- <td><?php echo $jabatan->id_karyawan ?></td> -->
		    <td style="text-align:center" width="140px">
			<?php
			echo anchor(site_url('jabatan/read/'.$jabatan->id_jabatan),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm'));
			echo '  ';
			echo anchor(site_url('jabatan/update/'.$jabatan->id_jabatan),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm'));
			echo '  ';
			echo anchor(site_url('jabatan/delete/'.$jabatan->id_jabatan),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
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
