




        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Edit Group</h3>
                <table class="table table-bordered">

                  <h1><?php echo lang('deactivate_heading');?></h1>
                  <p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>

                  <?php echo form_open("setting/deactivate/".$user->id);?>

                    <p>
                    	<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
                      <input type="radio" name="confirm" value="yes" checked="checked" />
                      <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
                      <input type="radio" name="confirm" value="no" />
                    </p>

                    <?php echo form_hidden($csrf); ?>
                    <?php echo form_hidden(array('id'=>$user->id)); ?>

                    <p><?php echo form_submit('submit', lang('deactivate_submit_btn'));?></p>

                  <?php echo form_close();?>

    	             <tr><td></td><td><a href="<?php echo site_url('setting') ?>" class="btn btn-default">Cancel</a></td></tr>
	            </table>
            </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
