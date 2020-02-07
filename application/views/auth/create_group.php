<!-- Main content -->
<section class='content'>
  <div class='row'>
    <div class='col-xs-12'>
      <div class='box'>
        <div class='box-header'>
        <h3 class='box-title'>Edit Group</h3>
        <table class="table table-bordered">

          <h1><?php echo lang('create_group_heading');?></h1>
          <p><?php echo lang('create_group_subheading');?></p>

          <div id="infoMessage"><?php echo $message;?></div>

          <?php echo form_open("setting/create_group");?>

                <p>
                      <?php echo lang('create_group_name_label', 'group_name');?> <br />
                      <?php echo form_input($group_name);?>
                </p>

                <p>
                      <?php echo lang('create_group_desc_label', 'description');?> <br />
                      <?php echo form_input($description);?>
                </p>

                <p><?php echo form_submit('submit', lang('create_group_submit_btn'));?></p>

          <?php echo form_close();?>


           <tr><td></td><td><a href="<?php echo site_url('setting') ?>" class="btn btn-default">Cancel</a></td></tr>
      </table>
    </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
