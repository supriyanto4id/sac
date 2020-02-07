<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Advanced form elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/bower_components/jquery/dist/jquery.min.js">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js">
           <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
           <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
    <script src="<?php echo base_url() ?>assets/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script
   // <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
   // <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
   <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">



          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
            <a href="http://localhost/ion-auth/dashboard">
                <i class="fa fa-laptop"></i> <span>DASHBOARD</span>
                <small class="label pull-right bg-red">3</small>
            </a>
        </li>


          <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i> <span>KARYAWAN</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="http://localhost/ion-auth/data_karyawan"><i class="fa fa-circle-o"></i>Data Karyawan</a></li>
            <li><a href="http://localhost/ion-auth/jabatan"><i class="fa fa-plus-circle"></i>Jabatan</a></li>
            <li><a href="http://localhost/ion-auth/inventaris"><i class="fa fa-plus-circle"></i>Inventaris</a></li>
          </ul>
        </li>
        <li><a href="http://localhost/ion-auth/setting"><i class='fa fa-cogs'></i> <span>SETTING</a></span></li>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <h1>
              Data Tables
              <small>advanced tables</small>
          </h1>
          <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="#">Tables</a></li>
              <li class="active">Data tables</li>
          </ol>
      </section>

      <br />
                     <br />
                     <!-- <h2 align="center">Dynamically Add or Remove input fields in PHP with JQuery</h2>
                     <div class="form-group">
                          <form name="add_name" id="add_name">
                               <div class="table-responsive">
                                    <table class="table table-bordered" id="dynamic_field">
                                         <tr>
                                          <td><input type="text" name="data" id="currency" /></td>
                                              <td><input type="text" name="no_bpjs[]" placeholder="nomor bpjs" class="form-control name_list" /></td>
                                                <td><input type="text" name="status[]" placeholder="status keluarga" class="form-control name_list" /></td>
                                                  <td><input type="text" name="kelas[]" placeholder="kelas bpjs" class="form-control name_list" /></td>
                                              <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                                         </tr>
                                    </table>
                                    <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
                               </div>
                          </form>
                        </div> -->

                        <div class="container" style="width:600px;">
                          <h2 align="center">Make Stylish Toggles Checkboxes & Use in Form with PHP Ajax</h2> <h3 id="result"></h3><br /><br />
                            <form method="post" id="insert_data">
                              <div class="form-group">
                                <label>Enter Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="1" />
                              </div>
                              <div class="form-group">
                                <label>Define Gender</label>
                                <div class="checkbox">
                                  <input type="checkbox" name="gender" id="gender" checked />
                                </div>
                              </div>
                              <input type="hidden" name="hidden_gender" id="hidden_gender" value="Setuju" />
                              <br />
                              <input type="submit" name="insert" id="action" class="btn btn-info" value="Insert" />
                          </form>
                            <br/><br/>
                          </div>

                       <h1>Ajax autosave</h1>
                     <div id="autosavenotify"></div>
                     <table width="200px">
                         <tr>
                         <td class="myid">
                             1
                         </td>
                             <td><select class="status" >
                               <option value='-1'>--Pilih--</option>
                               <option value='Setuju'>Setuju</option>
                               <option value='Tidak Setuju'>Tidak Setuju</option>
                               <option value='Proses'>Proses</option>
                                  <h3 id="result"></h3>
                             </select></td>
                         </tr>
                     </table>



  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> MFZ
    </div>
    <strong>Mildi Fathiah Zahra </strong> 2018
  </footer>


  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script> -->
<!-- jQuery 3 -->
<!-- <script src="<?php echo base_url() ?>assets/adminlte/bower_components/jquery/dist/jquery.min.js"></script> -->
<!-- Bootstrap 3.3.7 -->
<!-- <script src="<?php echo base_url() ?>assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
<!-- Select2 -->
<script src="<?php echo base_url() ?>assets/adminlte/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<!-- <script src="<?php echo base_url() ?>assets/jquery.maskMoney.min.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/plugins/input-mask/jquery.inputmask.extensions.js"></script> -->
<!-- date-range-picker -->
<script src="<?php echo base_url() ?>assets/adminlte/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url() ?>assets/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url() ?>assets/adminlte/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url() ?>assets/adminlte/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url() ?>assets/adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url() ?>assets/adminlte/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/adminlte/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/adminlte/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/adminlte/dist/js/demo.js"></script>

<!-- Page script -->
<!-- <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })



    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })



  })

  $(document).ready(function(){
      var i=1;
      $('#add').click(function(){
           i++;
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="no_bpjs[]" placeholder="nomor bpjs" class="form-control name_list" /></td> <td><input type="text" name="status[]" placeholder="Status keluarga" class="form-control name_list" /></td> <td><input type="text" name="kelas[]" placeholder="kelas" class="form-control name_list" /></td> <td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
      });
      $(document).on('click', '.btn_remove', function(){
           var button_id = $(this).attr("id");
           $('#row'+button_id+'').remove();
      });
      $('#submit').click(function(){
           $.ajax({
                url:"<?php echo base_url()?>hrd/coba",
                method:"POST",
                data:$('#add_name').serialize(),
                success:function(data)
                {
                     alert(data);
                     $('#add_name')[0].reset();
                }
           });
      });
 });



 $(function() {
   $('#currency').maskMoney();
 })



</script> -->
<script type="text/javascript">



$(document).ready(function(){
$('select.status').on('change',function () {
        var decision = $(this).val();
        var id = $('td.myid').html();
        // alert(decision);
        // alert(id);
        $.ajax({
                 type: "POST",
                 url: "<?php echo base_url()?>hrd/coba",
                 data: {decision: decision, id: id },
                 success: function(msg) {
                     $('#autosavenotify').text(msg);
                       $('#result').html(data);
                 }
      })
  });
});


</script>

<script>
      $(document).ready(function(){
       $('input[type="radio"]').click(function(){
       // var gender = $(this).val();
         // var id = $('td.myid').html();
         // var id = $('#id_karyawan').val();
         var id = $("#id_karyawan").val();
         var gender = $("#gender").val();
          $.ajax({
            url:"<?php echo base_url()?>hrd/coba",
            method:"POST",
            data:"&id_karyawan=" + id_karyawan + "&gender=" + gender,
            success: function(data){
              $('#result').html(data);
               $('#add_name')[0].reset();
            }
          });
        });
      });
</script>
</body>
</html>

<script>
$(document).ready(function(){

 $('#gender').bootstrapToggle({
  on: 'Setuju',
  off: 'Tidak Setuju',
  onstyle: 'success',
  offstyle: 'danger'
 });

 $('#gender').change(function(){
   if($(this).prop('checked'))
   {
     $('#hidden_gender').val('Setuju');
   }
   else
   {
     $('#hidden_gender').val('Tidak Setuju');
   }
  });

 // $('#insert_data').on('submit', function(){
   $('input[type="checkbox"]').click(function(event){
  event.preventDefault();
    if($('#name').val() == '')
    {
      alert("Please Enter Name");
      return false;
    }
    else
    {
      var form_data = $(this).serialize();
      $.ajax({
        url:"<?php echo base_url()?>hrd/coba",
        method:"POST",
        data:form_data,
        success:function(data){
     // if(data == 'done')
     // {
        $('#insert_data')[0].reset();
        $('#gender').bootstrapToggle('on');
        alert("Data Inserted");
        $('#result').html(data);
     // }
      }
    });
    }
  });
  });
</script>
