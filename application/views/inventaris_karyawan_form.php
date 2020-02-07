<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>

                  <h3 class='box-title'>INVENTARIS_KARYAWAN</h3>
                      <div class='box box-primary'>
                      <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>

                          <?php
                          $ci = get_instance();
                          $data_barang = $ci->db->get('inventaris')->result();
                          $data_inventaris = $ci->db->get('inventaris_karyawan')->result();

                          ?>
                          <td>
                            <?php
                          foreach ($data_barang as $row){
                            $idbarang = $row->id_barang;
                            $idkaryawan = $id_inventaris_karyawan;
                            $checked = null;
                            foreach ($data_inventaris as $inven_karya) {
                                if ($id_karyawan == $inven_karya->id_karyawan && $idbarang ==  $inven_karya->id_barang ) {
                                  $checked =' checked="checked"';
                                  break;
                                }

                            }
                            ?>
                                <input type="checkbox" name="group[]" class="minimal-red" value="<?php echo $row->id_barang ?>" > <?php echo "$row->nama_barang"; ?>
                                 <input type="hidden" name="id_inventaris_karyawan[<?php++$s?>]" value="<?php echo $id_inventaris_karyawan; ?>" />
                            <?php

                          }
                           ?>
                         </td>


                    <input type="hidden" name="id_karyawan"  value="<?php echo $id_karyawan; ?>" />
                    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button>
              	    <a href="<?php echo site_url('data_karyawan') ?>" class="btn btn-default">Cancel</a></td></tr>

                  </table>
                </form>
              </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
