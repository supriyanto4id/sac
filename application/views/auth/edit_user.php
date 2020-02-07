




        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Edit Group</h3>
                <table class="table table-bordered">

                  <h1><?php echo lang('edit_user_heading');?></h1>
                  <p><?php echo lang('edit_user_subheading');?></p>

                  <div id="infoMessage"><?php echo $message;?></div>

                  <?php echo form_open(uri_string());?>

                        <tr>
                          <td><?php echo lang('edit_user_fname_label', 'first_name');?></td>
                          <td>
                            <?php echo form_input($first_name);?>
                          </td>
                        <tr>
                          <td>  <?php echo lang('edit_user_lname_label', 'last_name');?></td>
                          <td>  <?php echo form_input($last_name);?></td>


                        <tr>
                          <td><b>  kode cabang :</b> </td>
                          <td>  <?php echo form_input($company);?></td>


                          <tr>
                            <td>    <?php echo lang('edit_user_phone_label', 'phone');?> </td>
                            <td>  <?php echo form_input($phone);?></td>

                            <tr>
                              <td>  <?php echo lang('edit_user_password_label', 'password');?></td>
                              <td><?php echo form_input($password);?></td>

                              <tr>
                                <td><?php echo lang('edit_user_password_confirm_label', 'password_confirm');?></td>
                                <td>  <?php echo form_input($password_confirm);?></td>
                                <tr>


                        <?php if ($this->ion_auth->is_admin()): ?>
                          <td>
                            <h3><?php echo lang('edit_user_groups_heading');?></h3></td>
                              <td>
                            <?php foreach ($groups as $group):?>
                                <label class="checkbox">
                                <?php
                                    $gID=$group['id'];
                                    $checked = null;
                                    $item = null;
                                    foreach($currentGroups as $grp) {
                                        if ($gID == $grp->id) {
                                            $checked= ' checked="checked"';
                                        break;
                                        }
                                    }
                                ?>

                                <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                                <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                                </label>
                            <?php endforeach?>

                        <?php endif ?>
                        </td>
                        <?php echo form_hidden('id', $user->id);?>
                        <?php echo form_hidden($csrf); ?>


                        <tr><td></td><td><p><?php echo form_submit('submit', lang('edit_user_submit_btn'));?></p> <a href="<?php echo site_url('setting') ?>" class="btn btn-default">Cancel</a></td></tr>
                  <?php echo form_close();?>



	            </table>
            </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
