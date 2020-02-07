<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>

                  <h3 class='box-title'>DATA_BPJS</h3>
                      <div class='box box-primary'>
                        <!-- <form action="<?php echo $action; ?>" method="post">
                          <table class='table table-bordered'>
                    	    <tr><td>No Bpjs <?php echo form_error('no_bpjs') ?></td>
                                <td><input type="text" class="form-control" name="no_bpjs" id="no_bpjs" placeholder="No Bpjs" value="<?php echo $no_bpjs; ?>" />
                            </td>
                    	    <tr><td>Status <?php echo form_error('status') ?></td>
                                <td><input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
                            </td>
                    	    <tr><td>Kelas <?php echo form_error('kelas') ?></td>
                                <td><input type="text" class="form-control" name="kelas" id="kelas" placeholder="Kelas" value="<?php echo $kelas; ?>" />
                            </td>
                    	    <tr><td>Id Karyawan <?php echo form_error('id_karyawan') ?></td>
                                <td><input type="text" class="form-control" name="id_karyawan" id="id_karyawan" placeholder="Id Karyawan" value="<?php echo $id_karyawan; ?>" />
                            </td>
                    	    <input type="hidden" name="id_databpjs" value="<?php echo $id_databpjs; ?>" />
                    	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button>
                    	    <a href="<?php echo site_url('data_bpjs') ?>" class="btn btn-default">Cancel</a></td></tr>

                    </table>
                  </form> -->

                  <div class="form-group">

                       <form name="add_name" id="add_name">
                            <div class="table-responsive">
                                 <table class="table table-bordered" id="dynamic_field">

                                      <tr>
                                           <td>
                                             <input type="text" name="no_bpjs[]" placeholder="nomor bpjs" class="form-control name_list" />
                                           </td>
                                             <td>
                                               <!-- <input type="text" name="status[]" placeholder="status keluarga" class="form-control name_list" /> -->
                                               <select name="status[]" placeholder="status keluarga" class="form-control select2" style="width: 100%;">
                                                <!-- <option selected="selected" value="<?php echo $status; ?>"><?php echo $statu; ?></option> -->
                                                <option >Istri</option>
                                                <option>Anak</option>
                                              </select>
                                             </td>
                                               <td>
                                                 <!-- <input type="text" name="kelas[]" placeholder="kelas bpjs" class="form-control name_list" /> -->
                                                 <select name="kelas[]" placeholder="status keluarga" class="form-control select2" style="width: 100%;">
                                                  <!-- <option selected="selected" value="<?php echo $jenis_kelamin; ?>"><?php echo $jenis_kelamin; ?></option> -->
                                                  <option >BPJS Kelas 1</option>
                                                    <option >BPJS Kelas 2</option>
                                                      <option >BPJS Kelas 3</option>
                                                </select>
                                               </td>
                                                 <td>   <input type="hidden" name="id_karyawan"  value="<?php echo $id_karyawan;  ?>" class="form-control name_list" /></td>
                                           <td>
                                             <button type="button" name="add" id="add" class="btn btn-success">Add More</button>
                                           </td>

                                      </tr>
                                 </table>

                                 <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
                            </div>
                       </form>
                  </div>

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
