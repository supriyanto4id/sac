

                <!-- Main content -->
                <section class='content'>
                  <div class='row'>
                    <div class='col-xs-12'>
                      <div class='box'>
                        <div class='box-header'>
                           <h3 class='box-title'>USER LIST
                             <a href="<?php echo base_url()?>setting/create_user" class="btn btn-danger btn-sm">Create User</a>
                             <a href="<?php echo base_url()?>setting/create_group" class="btn btn-primary btn-sm">  Create Group</a>

                           </h3>

                        </div><!-- /.box-header -->
                        <div class='box-body'>
                              <table class="table table-bordered table-striped" id="mytable">
                                  <thead>
                                      <tr>
                                        <th>NO</th>
                                        <th><?php echo lang('index_fname_th');?></th>
                                        <th><?php echo lang('index_lname_th');?></th>
                                        <th><?php echo lang('index_email_th');?></th>
                                        <th><?php echo lang('index_groups_th');?></th>
                                        <th><?php echo lang('index_status_th');?></th>
                                        <th><?php echo lang('index_action_th');?></th>
                                      </tr>
                                  </thead>
                      	    <tbody>
                                  <?php
                                  $start = 0;
                                  foreach ($users as $user)
                                  {
                                      ?>
                                    <tr>
                              		    <td><?php echo ++$start ?></td>
                                      <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
                                      <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
                                      <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>

                              		    <td style="text-align:center" width="140px">
                                        <?php foreach ($user->groups as $group):?>
                                					<?php echo anchor("setting/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                                        <?php endforeach?>
                              		    </td>
                                      <td><?php echo ($user->active) ? anchor("setting/deactivate/".$user->id, lang('index_active_link')) : anchor("setting/activate/". $user->id, lang('index_inactive_link'));?></td>
                          			      <td><?php echo anchor("setting/edit_user/".$user->id, 'Edit') ;?></td>
                      	             </tr>
                                      <?php
                                  }
                                  ?>
                                  </tbody>
                              </table>
                              <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
                              <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
                              <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
                              <script type="text/javascript">
                                  $(document).ready(function () {
                                      $("#mytable").dataTable();
                                  });
                              </script>
                            </div><!-- /.box-body -->
                      </div><!-- /.box -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </section><!-- /.content -->
