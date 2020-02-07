<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>

                  <h3 class='box-title'>DATA_KARYAWAN</h3>
                      <div class='box box-primary'>
                        <form action="<?php echo $action; ?>" method="post">
                          <table class='table table-bordered'>
                	           <tr><td>Nama Karyawan </td>
                               <td>
                                 <?php echo form_error('nama_karyawan') ?>
                                 <input type="text" class="form-control" name="nama_karyawan" id="nama_karyawan" placeholder="Nama Karyawan" value="<?php echo $nama_karyawan; ?>" />
                               </td>
                               <tr><td>Jenis Kelamin </td>
                                 <td>
                                   <?php echo form_error('jenis_kelamin') ?>
                                   <select name="jenis_kelamin" class="form-control select2" style="width: 100%;">
                                    <option selected="selected" value="<?php echo $jenis_kelamin; ?>"><?php echo $jenis_kelamin; ?></option>
                                    <option >Laki-laki</option>
                                    <option>Perempuan</option>
                                  </select>
                                 </td>
  
                	              <tr>
                                  <td>Tempat Lahir</td>
                                  <td>
                                     <?php echo form_error('tempat_lahir') ?>
                                    <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>" />
                                  </td>
                	                 <tr>
                                     <td>Tgl Lahir </td>
                                     <td>
                                       <?php echo form_error('tgl_lahir') ?>
                                       <div class="input-group date">
                                          <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                          </div>
                                          <input type="text" class="form-control" name="tgl_lahir" id="datepicker" value="<?php echo $tgl_lahir; ?>">
                                        </div>
                                     </td>
                                     <!-- <td><input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tgl Lahir" value="<?php echo $tgl_lahir; ?>" /> </td> -->
                	                       <tr>
                                           <td>Alamat </td>
                                           <td>
                                             <?php echo form_error('alamat') ?>
                                             <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php echo $alamat; ?>" />
                                           </td>
                	    <tr><td>Agama </td>
                            <td>
                              <?php echo form_error('agama') ?>
                              <input type="text" class="form-control" name="agama" id="agama" placeholder="Agama" value="<?php echo $agama; ?>" />
                            </td>
                	    <tr><td>Tgl Masuk </td>
                        <td>
                          <?php echo form_error('tgl_masuk') ?>
                          <div class="input-group">
                             <div class="input-group-addon">
                               <i class="fa fa-calendar"></i>
                             </div>
                             <input type="text" class="form-control" name="tgl_masuk" id="datepicker1" value="<?php echo $tgl_masuk; ?>">
                           </div>
                        </td>
                            <!-- <td><input type="text" class="form-control" name="tgl_masuk" id="tgl_masuk" placeholder="Tgl Masuk" value="<?php echo $tgl_masuk; ?>" />
                        </td> -->
                	    <tr><td>Tgl Keluar </td>
                        <td>
                          <?php echo form_error('tgl_keluar') ?>
                          <div class="input-group">
                             <div class="input-group-addon">
                               <i class="fa fa-calendar"></i>
                             </div>
                             <input type="text" class="form-control" name="tgl_keluar"id="datepicker2"  value="<?php echo $tgl_keluar; ?>">
                           </div>
                        </td>
                            <!-- <td><input type="text" class="form-control" name="tgl_keluar" id="tgl_keluar" placeholder="Tgl Keluar" value="<?php echo $tgl_keluar; ?>" />
                        </td> -->
                	    <tr><td>No Npwp </td>
                            <td>
                              <?php echo form_error('no_npwp') ?>
                              <input type="text" class="form-control" name="no_npwp" id="no_npwp" placeholder="No Npwp" value="<?php echo $no_npwp; ?>" />
                            </td>
                	    <tr><td>No Bpjs </td>
                            <td>
                              <?php echo form_error('no_bpjs') ?>
                              <input type="text" class="form-control" name="no_bpjs" id="no_bpjs" placeholder="No Bpjs" value="<?php echo $no_bpjs; ?>" />
                            </td>
                	            <tr><td>Status </td>
                                <td>
                                  <?php echo form_error('status') ?>
                                  <select name="status" class="form-control select2" style="width: 100%;">
                                   <option selected="selected" value="<?php echo $status; ?>"><?php echo $status; ?></option>
                                   <option >Karyawan Kontrak</option>
                                   <option>Karyawan Tetap</option>
                                 </select>
                                </td>
                              <tr><td>Jabatan</td><td><?php echo select_dinamis('id_jabatan', 'jabatan', 'nama_jabatan', 'Masukan keyword ...') ?></td></tr>
                              <tr><td>Job Disk </td>
                                    <td>
                                      <?php echo form_error('job_disk') ?>
                                    <textarea type="text" class="form-control" rows="3" name="job_disk" id="job_disk" placeholder="Job Disk" value="<?php echo $job_disk; ?>"><?php echo $job_disk; ?></textarea>
                                    </td>
                	    <input type="hidden" name="id_karyawan" value="<?php echo $id_karyawan; ?>" />
                      <input type="hidden" name="id_user" value="<?php echo $id_user; ?>" />
                	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button>
                	    <a href="<?php echo site_url('data_karyawan') ?>" class="btn btn-default">Cancel</a></td></tr>

                      </table>
                    </form>
                  </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
