<?php
//session_start();
//if(empty($_SESSION['username'])or empty($_SESSION['password'])){header("location:index.php");}
//error_reporting(0);
include "../apl_koneksi.php";


$sqljumlahpeserta = "SELECT COUNT(*) as kota FROM apl_kota";
$resultjumlahpeserta= mysqli_query($conn,$sqljumlahpeserta);

$sqlmasuk = "SELECT COUNT(*) as jumlahmasuk FROM apl_kecamatan";
$resultmasuk= mysqli_query($conn,$sqlmasuk);

$sqlkeluar= "SELECT COUNT(*) as jumlahkeluar FROM apl_kelurahan";
$resultkeluar= mysqli_query($conn,$sqlkeluar);

$sqlrw = "SELECT COUNT(*) as jumlahrw FROM apl_rw";
$resultrw= mysqli_query($conn,$sqlrw);

$sqlrt= "SELECT COUNT(*) as jumlahrt FROM apl_rt";
$resultrt= mysqli_query($conn,$sqlrt);

$sqlpegawai= "SELECT COUNT(*) as jumlahpegawai FROM apl_pegawai";
$resultpegawai= mysqli_query($conn,$sqlpegawai);

$sqlpenduduk = "SELECT COUNT(*) as penduduk FROM `apl_penduduk`";
$resultpenduduk= mysqli_query($conn,$sqlpenduduk);

$sqlpendatang= "SELECT COUNT(*) as jumlahpendatang FROM apl_pendatang";
$resultpendatang= mysqli_query($conn,$sqlpendatang);

	
?>


<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aplikasi Kependudukan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Kependudukan</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="images/admin.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Administrator</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="images/admin.png" class="img-circle" alt="User Image">

                <p>
                 Administrator
                  <small>Petugas</small>
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="apl_profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="apl_logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/admin.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Administrator</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="apl_home.php">
            <i class="fa fa-dashboard"></i>
			<span>Home</span>
          </a>       
        </li>
		<li class="treeview">
          <a href="apl_kota.php">
           <i class="fa fa-fw fa-bank"></i>
            <span>Data Kota</span>   
          </a> 
        </li>
		<li><a href="apl_kecamatan.php">
		<i class="fa fa-fw fa-industry"></i> 
			<span>Data Kecamatan</span></a>
		</li>
		<li class="treeview">
          <a href="apl_kelurahan.php">
            <i class="fa fa-fw fa-ship"></i> 
			<span>Data Kelurahan</span>   
          </a>
        </li>
		<li class="treeview">
          <a href="apl_dawis.php">
            <i class="fa fa-fw fa-building-o"></i>
			<span>Data Dawis</span>   
          </a>
        </li>
		<li class="treeview active">
          <a href="#">
            <i class="fa fa-fw fa-archive"></i> 
			<span>Penduduk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu menu-open" style="display: block;">
            <li><a href="apl_penduduktetap.php"><i class="fa fa-fw fa-book"></i>Penduduk Tetap</a></li>
            <li><a href="apl_pendatang.php"><i class="fa fa-fw fa-book"></i>Penduduk Pendatang</a></li>
          </ul>
        </li>
		<li><a href="apl_pegawai.php">
		<i class="fa fa-fw fa-user"></i> 
		<span>Data Pegawai</span></a>
		</li>	 
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
	
	
	
	
	
	
	
	
	
	
	

    <!-- Main content -->
    <section class="content">
		<div class="row">
	<div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> Note:</h4>
        Refresh Laman untuk melihat perubahan
      </div>
    </div>
	</div>
		<div class="row">
		<div class="col-lg-12">
		<div class="box box-success">
            <div class="box-header ui-sortable-handle" class="center" style="cursor: move;">
				<center>
              <i class="fa fa-edit"></i>
		
              <h3 class="box-title">Rekapitulasi Data </h3>

             </center>
					
            </div>
            
            
          </div>
		
		
		
		</div>		
		</div>
		<div class="row">
		<div class="col-lg-12">
		<div class="box box-success">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
             

           

              <div class="col-md-3 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
							<div class="info-box-content">
							<span class="info-box-text">KABUPATEN/KOTA</span>
							<span class="info-box-number">
							<?php
							
									if(mysqli_num_rows($resultjumlahpeserta)>0){
											while($row = mysqli_fetch_assoc($resultjumlahpeserta)){
											echo $row["kota"];
											}
									}
							
							?>
							
							
							</span>
				</div>
            <!-- /.info-box-content -->
					</div>
          <!-- /.info-box -->
					</div>
					
					 <div class="col-md-3 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-aqua"><i class="ion ion-ios-people-outline"></i></span>
							<div class="info-box-content">
							<span class="info-box-text">KECAMATAN</span>
							<span class="info-box-number">
							
							<?php
							
									if(mysqli_num_rows($resultmasuk)>0){
											while($row = mysqli_fetch_assoc($resultmasuk)){
											echo $row["jumlahmasuk"];
											}
									}
							
							?>
							</span>
				</div>
            <!-- /.info-box-content -->
					</div>
          <!-- /.info-box -->
					</div>
					
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-red"><i class="ion ion-ios-people-outline"></i></span>
							<div class="info-box-content">
							<span class="info-box-text">KELURAHAN</span>
							<span class="info-box-number">
							<?php
							
									if(mysqli_num_rows($resultkeluar)>0){
											while($row2 = mysqli_fetch_assoc($resultkeluar)){
												$satu = $row2["jumlahkeluar"];
											echo $satu;
											}
									}
							
							?>
							
							
							</span>
				</div>
            <!-- /.info-box-content -->
					</div>
          <!-- /.info-box -->
					</div>
					
					 <div class="col-md-3 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-green"><i class="ion ion-ios-people-outline"></i></span>
							<div class="info-box-content">
							<span class="info-box-text">RW</span>
							<span class="info-box-number">
							<?php
							
								if(mysqli_num_rows($resultrw)>0){
											while($row = mysqli_fetch_assoc($resultrw)){
												echo $row["jumlahrw"];
											
											}
									}		
									
							
							?>
							
							
							
							
							</span>
				</div>
            <!-- /.info-box-content -->
					</div>
          <!-- /.info-box -->
					</div>
					
					
					
					 <div class="col-md-3 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
							<div class="info-box-content">
							<span class="info-box-text">RT</span>
							<span class="info-box-number">
							<?php
							
									if(mysqli_num_rows($resultrt)>0){
											while($row = mysqli_fetch_assoc($resultrt)){
											echo $row["jumlahrt"];
											}
									}
							
							?>
							
							
							</span>
				</div>
            <!-- /.info-box-content -->
					</div>
          <!-- /.info-box -->
					</div>
					
					 <div class="col-md-3 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-aqua"><i class="ion ion-ios-people-outline"></i></span>
							<div class="info-box-content">
							<span class="info-box-text">PEGAWAI</span>
							<span class="info-box-number">
							
							<?php
							
									if(mysqli_num_rows($resultpegawai)>0){
											while($row = mysqli_fetch_assoc($resultpegawai)){
											echo $row["jumlahpegawai"];
											}
									}
							
							?>
							</span>
				</div>
            <!-- /.info-box-content -->
					</div>
          <!-- /.info-box -->
					</div>
					
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-red"><i class="ion ion-ios-people-outline"></i></span>
							<div class="info-box-content">
							<span class="info-box-text">PENDUDUK</span>
							<span class="info-box-number">
							<?php
							
									if(mysqli_num_rows($resultpenduduk)>0){
											while($row2 = mysqli_fetch_assoc($resultpenduduk)){
												echo $row2["penduduk"];
									
											}
									}
							
							?>
							
							
							</span>
				</div>
            <!-- /.info-box-content -->
					</div>
          <!-- /.info-box -->
					</div>
					
					 <div class="col-md-3 col-sm-6 col-xs-12">
						<div class="info-box">
							<span class="info-box-icon bg-green"><i class="ion ion-ios-people-outline"></i></span>
							<div class="info-box-content">
							<span class="info-box-text">PENDATANG</span>
							<span class="info-box-number">
							<?php
							
								if(mysqli_num_rows($resultpendatang)>0){
											while($row = mysqli_fetch_assoc($resultpendatang)){
												echo $row["jumlahpendatang"];
											
											}
									}		
									
							
							?>
							
							
							
							
							</span>
				</div>
            <!-- /.info-box-content -->
					</div>
          <!-- /.info-box -->
					</div>
					
					
					
					
					
					
				

					
					
					
					
					
					
					
					
					
					
					
            </div>
            
            
          </div>
		
		
		
		</div>		
		</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
