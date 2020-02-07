<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>

                  <h3 class='box-title'>Print Nomor Surat Peringatan</h3>
                      <div class='box box-primary'>
                        <form action="<?php echo $action; ?>" method="post">
                          <table class='table table-bordered'>
	                         <tr>
                             <td>Nomor Surat <?php// echo form_error('nama_barang') ?></td>
                              <td>
                                <input type="text" class="form-control" name="no_surat"  placeholder="no surat peringatan" value="" />
                              </td>
	                             <!-- <tr><td>Alasan Keluar <?php //echo form_error('keterangan') ?></td>
                                 <td>
                                   <input type="text" class="form-control" name="alasan_keluar"  placeholder="alasan keluar" value="" />
                                 </td> -->
	                                <!-- <input type="hidden" name="id_karyawan" value="<?php// echo $id_barang; ?>" /> -->
	                                 <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	                                    <a href="<?php echo site_url('data_karyawan') ?>" class="btn btn-default">Cancel</a></td></tr>

                                    </table>
                                  </form>
                                  </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
