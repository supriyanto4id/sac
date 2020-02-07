
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-6'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>Data_karyawan Read</h3>

                    <table class="table table-bordered">
                      <?php foreach ($data_karyawan as $data_karyawan): ?>
                      <tr><td>Nama Karyawan</td><td><?php echo $data_karyawan->nama_karyawan; ?></td></tr>
                      <tr><td>Tempat Lahir</td><td><?php echo $data_karyawan->tempat_lahir; ?></td></tr>
                      <tr><td>Tgl Lahir</td><td><?php echo $data_karyawan->tgl_lahir; ?></td></tr>
                      <tr><td>Jenis Kelamin</td><td><?php echo $data_karyawan->jenis_kelamin; ?></td></tr>
                      <tr><td>Alamat</td><td><?php echo $data_karyawan->alamat; ?></td></tr>
                      <tr><td>Agama</td><td><?php echo $data_karyawan->agama; ?></td></tr>
                      <tr><td>Tgl Masuk</td><td><?php echo $data_karyawan->tgl_masuk; ?></td></tr>
                      <tr><td>Tgl Keluar</td><td><?php echo $data_karyawan->tgl_keluar; ?></td></tr>
                      <tr><td>No Npwp</td><td><?php echo $data_karyawan->no_npwp; ?></td></tr>
                      <tr><td>No Bpjs</td><td><?php echo $data_karyawan->no_bpjs; ?></td></tr>
                      <tr><td>Status</td><td><?php echo $data_karyawan->status; ?></td></tr>
                      <tr><td>Job Disk</td><td><?php echo $data_karyawan->job_disk; ?></td></tr>
                      <!-- <tr><td>Jabatan</td><td><?php echo $data_karyawan->id_jabatan; ?></td></tr> -->
                                <?php foreach ($jabatan as $data_jabatan): ?>
                                  <tr><td>Jabatan</td><td><?php echo $data_jabatan->nama_jabatan; ?></td></tr>
                                 <tr><td>Gaji Pokok</td><td><?php echo $data_jabatan->gaji_pokok; ?></td></tr>
                                 <tr><td>T Jabatan</td><td><?php echo $data_jabatan->t_jabatan; ?></td></tr>
                                 <tr><td>T Bbm</td><td><?php echo $data_jabatan->t_bbm; ?></td></tr>
                                 <tr><td>T Pulsa</td><td><?php echo $data_jabatan->t_pulsa; ?></td></tr>
                                 <tr><td>T Perumahan</td><td><?php echo $data_jabatan->t_perumahan; ?></td></tr>
                                 <tr><td>Uang Makan</td><td><?php echo $data_jabatan->uang_makan; ?></td></tr>
                                 <tr><td>Insentif</td><td><?php echo $data_jabatan->insentif; ?></td></tr>


                                <?php endforeach; ?>

                      <tr><td></td><td><a href="<?php echo site_url('data_karyawan/update/'.$data_karyawan->id_karyawan)?>" class="btn btn-warning">Edit</a> <a href="<?php echo site_url('data_karyawan') ?>" class="btn btn-default">Cancel</a></td></tr>

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
                      <div class="box-tools pull-right">


                            <a href="<?php echo site_url('data_karyawan/create_inventaris_karyawan/'.$data_karyawan->id_karyawan) ?>" class="btn btn-primary btn-sm">Add</a>


                        </div>
                          <table class="table table-bordered table-striped" id="mytable">
                              <thead>
                                  <tr>
                                  <th width="80px">No</th>
                                  <th>Nama Barang</th>
                                  <th>Keterangan</th>
                                  <th>Action</th>
                                  </tr>
                              </thead>
                        <tbody>
                              <?php
                              $start = 0;
                              foreach ($list_inventaris as $data_inventaris)
                              {
                                  ?>
                                  <tr>
                          <td><?php echo ++$start ?></td>
                          <td><?php echo $data_inventaris->nama_barang; ?></td>
                          <td><?php echo $data_inventaris->keterangan; ?></td>
                          <td style="text-align:center" width="140px">
                        <?php

                        echo anchor(site_url('inventaris_karyawan/delete/'.$data_inventaris->id_inventaris_karyawan),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
                        ?>
                          </td>
                            </tr>
                                  <?php
                              }
                              ?>
                              </tbody>
                          </table>


                     </div><!-- /.box-body -->
                  </div><!-- /.box -->
                </div><!-- /.col -->

                <div class='col-xs-12'>
                  <div class='box'>
                    <div class='box-header'>
                      <h3 class='box-title'>Data Bpjs Keluarga</h3>
                      <div class="box-tools pull-right">

                              <a href="<?php echo site_url('data_karyawan/create_data_bpjs/'.$data_karyawan->id_karyawan) ?>" class="btn btn-primary btn-sm">Add</a>


                                <?php endforeach; ?>


                        </div>
                        <table class="table table-bordered table-striped" id="mytable">
                            <thead>
                                <tr>
                                    <th width="80px">No</th>
                                      <th>No Bpjs</th>
                                      <th>Status</th>
                                      <th>Kelas</th>
                                      <!-- <th>Id Karyawan</th> -->
                                      <th>Action</th>
                                </tr>
                              </thead>
                             <tbody>
                            <?php
                            $start = 0;
                            foreach ($data_bpjs_data as $data_bpjs)
                            {
                                ?>
                                <tr>
                                  <td><?php echo ++$start ?></td>
                                  <td><?php echo $data_bpjs->no_bpjs ?></td>
                                  <td><?php echo $data_bpjs->status ?></td>
                                  <td><?php echo $data_bpjs->kelas ?></td>
                                  <!-- <td><?php echo $data_bpjs->id_karyawan ?></td> -->
                                  <td style="text-align:center" width="140px">
                                    <?php
                                      // echo anchor(site_url('data_bpjs/read/'.$data_bpjs->id_databpjs),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm'));
                                      // echo '  ';
                                      // echo anchor(site_url('data_bpjs/update/'.$data_bpjs->id_databpjs),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm'));
                                      // echo '  ';
                                      echo anchor(site_url('data_karyawan/delete_bpjs/'.$data_bpjs->id_databpjs),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
                                      ?>
                                </td>
                               </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                        </table>
                     </div><!-- /.box-body -->
                  </div><!-- /.box -->
                </div><!-- /.col bpjs keluarga -->



              </div><!-- /.row -->
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class='row'>
            <div class='col-xs-6'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>Sp_history Read</h3>
                    <table class="table table-bordered">
                      <tr>
                        <th>No</th>
                        <th>No Surat</th>
                        <th>Keterangan</th>
                        <th>tanggal SP</th>
                      </tr>
                      <?php $start = 0; ?>
                      <?php foreach ($sp_history as $data_sp): ?>
                      <tr>
                          <td><?php echo  ++$start?></td>
                        <td><?php echo  $data_sp->no_surat; ?></td>
                          <td><?php echo  $data_sp->keterangan; ?></td>
                            <td><?php echo  $data_sp->tanggal_sp; ?></td>
                      </tr>
                        <?php endforeach; ?>
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
                      <h3 class='box-title'>Resign_history Read</h3>
                        <table class="table table-bordered">
                          <?php foreach ($resign_history as $data_resign): ?>
                            <tr><td>No Surat</td><td><?php echo $data_resign->no_surat; ?></td></tr>
                            <tr><td>Alasan Keluar</td><td><?php echo  $data_resign->alasan_keluar; ?></td></tr>
                              <tr><td>Tanggal Resign</td><td><?php echo  $data_resign->tanggal_resign; ?></td></tr>
                            <tr><td></td><td><a href="<?php echo site_url('data_karyawan') ?>" class="btn btn-default">Cancel</a></td></tr>

                          <?php endforeach; ?>

                       </table>
                     </div><!-- /.box-body -->
                  </div><!-- /.box -->
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.col -->
          </div><!-- /.row -->


        </section><!-- /.content -->
