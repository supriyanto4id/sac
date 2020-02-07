<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>

                  <h3 class='box-title'>JABATAN</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Nama Jabatan <?php echo form_error('nama_jabatan') ?></td>
            <td><input type="text" class="form-control" name="nama_jabatan" id="nama_jabatan" placeholder="Nama Jabatan" value="<?php echo $nama_jabatan; ?>" />
        </td>
	    <tr><td>Gaji Pokok <?php echo form_error('gaji_pokok') ?></td>
            <td><label>Rp</label><input type="text" class=" uang" name="gaji_pokok" id="demo1"  value="<?php echo $gaji_pokok; ?>" />
        </td>
	    <tr><td>T Jabatan <?php echo form_error('t_jabatan') ?></td>
            <td><label>Rp</label><input type="text" class=" uang" name="t_jabatan" id="demo2" value="<?php echo $t_jabatan; ?>" />
        </td>
	    <tr><td>T Bbm <?php echo form_error('t_bbm') ?></td>
            <td><label>Rp</label><input type="text" class=" uang" name="t_bbm" id="demo3"  value="<?php echo $t_bbm; ?>" />
        </td>
	    <tr><td>T Pulsa <?php echo form_error('t_pulsa') ?></td>
            <td><label>Rp</label><input type="text" class="uang" name="t_pulsa" id="demo4"  value="<?php echo $t_pulsa; ?>" />
        </td>
	    <tr><td>T Perumahan <?php echo form_error('t_perumahan') ?></td>
            <td><label>Rp</label><input type="text" class="uang" name="t_perumahan" id="demo5" value="<?php echo $t_perumahan; ?>" />
        </td>
	    <tr><td>Uang Makan <?php echo form_error('uang_makan') ?></td>
            <td> <label>Rp</label> <input type="text" class="uang" name="uang_makan" id="demo6"  value="<?php echo $uang_makan; ?>" />
        </td>
	    <tr><td>Insentif <?php echo form_error('insentif') ?></td>
            <td>  <label>Rp</label> <input type="text" name="insentif" id="demo7" value="<?php echo $insentif; ?>"/>
               <!-- <input type="text" class="uang form_control" name="insentif" id="insentif" value="<?php echo $insentif; ?>" /> -->
               <!-- <input type="text" class="form-control" data-inputmask='"mask": "999.999.999"' data-mask> -->
                </td>

	 
	    <!-- <tr><td>Id Karyawan <?php echo form_error('id_karyawan') ?></td>
            <td><input type="text" class="form-control" name="id_karyawan" id="id_karyawan" placeholder="Id Karyawan" value="<?php echo $id_karyawan; ?>" />
        </td> -->
	    <input type="hidden" name="id_jabatan" value="<?php echo $id_jabatan; ?>" />
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	    <a href="<?php echo site_url('jabatan') ?>" class="btn btn-default">Cancel</a></td></tr>

    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
