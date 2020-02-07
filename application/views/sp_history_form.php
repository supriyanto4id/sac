<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>SP_HISTORY</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Tanggal Sp <?php echo form_error('tanggal_sp') ?></td>
            <td><input type="text" class="form-control" name="tanggal_sp" id="tanggal_sp" placeholder="Tanggal Sp" value="<?php echo $tanggal_sp; ?>" />
        </td>
	    <tr><td>Id Karyawan <?php echo form_error('id_karyawan') ?></td>
            <td><input type="text" class="form-control" name="id_karyawan" id="id_karyawan" placeholder="Id Karyawan" value="<?php echo $id_karyawan; ?>" />
        </td>
	    <input type="hidden" name="id_sp" value="<?php echo $id_sp; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('sp_history') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->