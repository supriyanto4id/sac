<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>RESIGN_HISTORY</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Tanggal Resign <?php echo form_error('tanggal_resign') ?></td>
            <td><input type="text" class="form-control" name="tanggal_resign" id="tanggal_resign" placeholder="Tanggal Resign" value="<?php echo $tanggal_resign; ?>" />
        </td>
	    <tr><td>Id Karyawan <?php echo form_error('id_karyawan') ?></td>
            <td><input type="text" class="form-control" name="id_karyawan" id="id_karyawan" placeholder="Id Karyawan" value="<?php echo $id_karyawan; ?>" />
        </td>
	    <input type="hidden" name="id_resign" value="<?php echo $id_resign; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('resign_history') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->