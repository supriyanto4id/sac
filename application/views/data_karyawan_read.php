
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-6'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>Data_karyawan Read</h3>
                    <table class="table table-bordered">
                	    <tr><td>Nama Karyawan</td><td><?php echo $nama_karyawan; ?></td></tr>
                	    <tr><td>Tempat Lahir</td><td><?php echo $tempat_lahir; ?></td></tr>
                	    <tr><td>Tgl Lahir</td><td><?php echo $tgl_lahir; ?></td></tr>
                	    <tr><td>Jenis Kelamin</td><td><?php echo $jenis_kelamin; ?></td></tr>
                	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
                	    <tr><td>Agama</td><td><?php echo $agama; ?></td></tr>
                	    <tr><td>Tgl Masuk</td><td><?php echo $tgl_masuk; ?></td></tr>
                	    <tr><td>Tgl Keluar</td><td><?php echo $tgl_keluar; ?></td></tr>
                	    <tr><td>No Npwp</td><td><?php echo $no_npwp; ?></td></tr>
                	    <tr><td>No Bpjs</td><td><?php echo $no_bpjs; ?></td></tr>
                	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
                      <tr><td>Status</td><td><?php echo $kelas; ?></td></tr>
                	    <tr><td></td><td><a href="<?php echo site_url('data_karyawan') ?>" class="btn btn-default">Cancel</a></td></tr>
          	       </table>
                 </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class='col-xs-6'>
              <div class='row'>
                <div class='col-xs-12'>
                  <div class='box'>
                    <div class='box-header'>
                      <h3 class='box-title'>Inventaris Read</h3>
                        <table class="table table-bordered">
                          <tr><td>Nama Barang</td><td><?php echo $nama_barang; ?></td></tr>
                          <tr><td>Jumlah</td><td><?php echo $jumlah; ?></td></tr>
                          <tr><td>Id Karyawan</td><td><?php echo $id_karyawan; ?></td></tr>
                          <tr><td></td><td><a href="<?php echo site_url('data_karyawan') ?>" class="btn btn-default">Cancel</a></td></tr>
                       </table>
                     </div><!-- /.box-body -->
                  </div><!-- /.box -->
                </div><!-- /.col -->

                <div class='col-xs-12'>
                  <div class='box'>
                    <div class='box-header'>
                      <h3 class='box-title'>Data_bpjs Read</h3>
                        <table class="table table-bordered">
                      	    <tr><td>No Bpjs</td><td><?php echo $no_bpjs; ?></td></tr>
                      	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
                      	    <tr><td>Kelas</td><td><?php echo $kelas; ?></td></tr>
                      	    <tr><td>Id Karyawan</td><td><?php echo $id_karyawan; ?></td></tr>
                          <tr><td></td><td><a href="<?php echo site_url('data_karyawan') ?>" class="btn btn-default">Cancel</a></td></tr>
                       </table>
                     </div><!-- /.box-body -->
                  </div><!-- /.box -->
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class='row'>
            <div class='col-xs-6'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>Jabatan Read</h3>
                    <table class="table table-bordered">
                	    <tr><td>Nama Jabatan</td><td><?php echo $nama_jabatan; ?></td></tr>
                	    <tr><td>Gaji Pokok</td><td><?php echo $gaji_pokok; ?></td></tr>
                	    <tr><td>T Jabatan</td><td><?php echo $t_jabatan; ?></td></tr>
                	    <tr><td>T Bbm</td><td><?php echo $t_bbm; ?></td></tr>
                	    <tr><td>T Pulsa</td><td><?php echo $t_pulsa; ?></td></tr>
                	    <tr><td>T Perumahan</td><td><?php echo $t_perumahan; ?></td></tr>
                	    <tr><td>Uang Makan</td><td><?php echo $uang_makan; ?></td></tr>
                	    <tr><td>Insentif</td><td><?php echo $insentif; ?></td></tr>
                	    <tr><td>Job Disk</td><td><?php echo $job_disk; ?></td></tr>
                	    <tr><td>Id Karyawan</td><td><?php echo $id_karyawan; ?></td></tr>
                	    <tr><td></td><td><a href="<?php echo site_url('data_karyawan') ?>" class="btn btn-default">Cancel</a></td></tr>
          	       </table>
                 </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->

            <div class='col-xs-6'>
              <div class='row'>
                <div class='col-xs-12'>
                  <div class='box'>
                    <div class='box-header'>
                      <h3 class='box-title'>Sp_history Read</h3>
                        <table class="table table-bordered">
                    	    <tr><td>Tanggal Sp</td><td><?php echo $tanggal_sp; ?></td></tr>
                    	    <tr><td>Id Karyawan</td><td><?php echo $id_karyawan; ?></td></tr>
                          <tr><td></td><td><a href="<?php echo site_url('data_karyawan') ?>" class="btn btn-default">Cancel</a></td></tr>
                       </table>
                     </div><!-- /.box-body -->
                  </div><!-- /.box -->
                </div><!-- /.col -->

                <div class='col-xs-12'>
                  <div class='box'>
                    <div class='box-header'>
                      <h3 class='box-title'>Resign_history Read</h3>
                        <table class="table table-bordered">
                    	    <tr><td>Tanggal Resign</td><td><?php echo $tanggal_resign; ?></td></tr>
                    	    <tr><td>Id Karyawan</td><td><?php echo $id_karyawan; ?></td></tr>
                          <tr><td></td><td><a href="<?php echo site_url('data_karyawan') ?>" class="btn btn-default">Cancel</a></td></tr>
                       </table>
                     </div><!-- /.box-body -->
                  </div><!-- /.box -->
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.col -->
          </div><!-- /.row -->


        </section><!-- /.content -->
