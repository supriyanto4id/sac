
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Data Karyawan </h3>
                  <table class="table table-bordered">
                          <tr>
                            <th>No</th>
                            <th>Nama Jabatan</th>
                            <th>Jumlah Karyawan</th>
                          </tr>
                          <?php $start = 0; ?>
                        <?php foreach ($data_jabatan as $data): ?>
                          <tr>
                            <td><?php echo  ++$start?></td>
                            <td><?php echo  $data->nama_jabatan; ?></td>
                            <td><?php echo  $data->jumlah; ?></td>
                          </tr>
                        <?php endforeach; ?>
          	       </table>
                 </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
