
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Create User</h3>
                <table class="table table-bordered">


                  <h1><?php echo lang('create_user_heading');?></h1>
                  <p><?php echo lang('create_user_subheading');?></p>

                  <div id="infoMessage"><?php echo $message;?></div>

                  <?php echo form_open("setting/create_user");?>

                        <tr>
                          <td> <?php echo lang('create_user_fname_label', 'first_name');?></td>
                          <td><?php echo form_input($first_name);?></td>

                          <tr>
                            <td>  <?php echo lang('create_user_lname_label', 'last_name');?> </td>
                            <td>  <?php echo form_input($last_name);?></td>


                        <?php
                        if($identity_column!=='email') {
                            echo '<p>';
                            echo lang('create_user_identity_label', 'identity');
                            echo '<br />';
                            echo form_error('identity');
                            echo form_input($identity);
                            echo '</p>';
                        }
                        ?>

                        <tr>
                          <td> <b>Kode cabang : </b></td>
                          <td>    <?php echo form_input($company);?></td>

                          <tr>
                            <td> <?php echo lang('create_user_email_label', 'email');?> </td>
                            <td>      <?php echo form_input($email);?></td>

                              <tr>
                                <td> <?php echo lang('create_user_phone_label', 'phone');?> </td>
                                <td>          <?php echo form_input($phone);?></td>

                                <tr>
                                  <td> <?php echo lang('create_user_password_label', 'password');?></td>
                                  <td>        <?php echo form_input($password);?></td>

                                  <tr>
                                    <td>  <?php echo lang('create_user_password_confirm_label', 'password_confirm');?></td>
                                    <td>          <?php echo form_input($password_confirm);?></td>


                                       <tr><td></td><td><a href="<?php echo site_url('setting') ?>" class="btn btn-default">Cancel</a> <?php echo form_submit('submit', lang('create_user_submit_btn'));?></td></tr>
                  <?php echo form_close();?>



	            </table>
            </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
