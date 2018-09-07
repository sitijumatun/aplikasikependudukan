<?php
//session_start();
//if(empty($_SESSION['username'])or empty($_SESSION['password'])){header("location:index.php");}
//error_reporting(0);
include "../apl_koneksi.php";
$kodekel = $_GET['Id_RT'];

$sqljumlahRT = "SELECT COUNT(*) as jumlahRT FROM apl_penduduk WHERE Id_rt='$kodekel' AND Id_status='1'";
$resultjumlahRT= mysqli_query($conn,$sqljumlahRT);	
?>
<!DOCTYPE html>
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
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

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
            <span>Data kota</span>   
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
			 <li><a href="apl_penduduktetap.php"><i class="fa fa-fw fa-book"></i>Penduduk Pindah</a></li>
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
    <section class="content-header">
      <h1>
        Data Penduduk
        <small>Silakan Administrasi Data Penduduk</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Data Penduduk</a></li>
      </ol>
    </section>
	 <section class="content">
		
		<div class="row">
		
		<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="box box-warning box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Data Penduduk</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="">
            
			  <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">JUMLAH PENDUDUK DALAM RT INI</span>
              <span class="info-box-number">
			  <?php
							
									if(mysqli_num_rows($resultjumlahRT)>0){
											while($row2 = mysqli_fetch_assoc($resultjumlahRT)){
												$satu = $row2["jumlahRT"];
											echo $satu;
											}
									}
									else
									{
										echo "0";
									}
							
							?>
			  
			  
			  </span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                      <a href="apl_Penduduktambahform.php?Id_RT=<?php echo $kodekel; ?>"><button class="btn bg-orange btn-flat margin"><i class="fa fa-fw fa-user-plus"></i>Tambahkan data penduduk</button></a>
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
			  
			  
			  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Penduduk</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width:100px"><center>NIK</center></th>
				  <th><center>Foto</center></th>
                  <th><center>Nama</center></th>			 
				  <th><center>Jenis Kelamin</center></th>
				  <th><center>Agama</center></th>
				  <th><center>Pendidikan</center></th>
				  <th><center>Pekerjaan</center></th>
				  <th><center>Status</center></th>
				  <th><center>Dawis</center></th>
                  <th style="width:200px"><center>Aksi</center></th>              
                </tr>
                </thead>
                <tbody>
				
				
                    <?php
					include "../apl_koneksi.php";
					$query = "SELECT apl_penduduk.NIK as nik, apl_penduduk.Foto as foto , apl_penduduk.nama as nama, apl_penduduk.Jenis_kelamin as jeniskelamin, apl_penduduk.Agama as agama , apl_penduduk.Pendidikan as pendidikan, apl_penduduk.Pekerjaan as pekerjaan , apl_penduduk.Status_pernikahan as statusnikah , apl_dawis.Nama_dawis as dawis from apl_penduduk , apl_dawis WHERE apl_penduduk.Id_dawis = apl_dawis.Id_dawis AND apl_penduduk.Id_status= 1 AND apl_penduduk.Id_rt ='$kodekel'";
					
					$sql = mysqli_query($conn,$query);
					while($data = mysqli_fetch_array($sql)){
							echo "<tr>";
							echo "<td>".$data['nik']."</td>";
							echo "<td><center><img src='images/".$data['foto']."' width='50' height='50'></center></td>";
							echo "<td>".$data['nama']."</td>";
							echo "<td>".$data['jeniskelamin']."</td>";
							echo "<td>".$data['agama']."</td>";
							echo "<td>".$data['pendidikan']."</td>";
							echo "<td>".$data['pekerjaan']."</td>";
							echo "<td>".$data['statusnikah']."</td>";
							echo "<td>".$data['dawis']."</td>";
						
							
							
					?>
							<td><?php echo"<center><a href='apl_pendudukeditform.php?nik=".$data['nik']."&Id_RT=".$kodekel."'><i class='fa fa-fw fa-edit'></i>Edit</a>&nbsp
								<a href='apl_pendudukdelete.php?nik=".$data['nik']."&Id_RT=".$kodekel."'><i class='fa fa-fw fa-trash'></i>Delete</a>&nbsp
								</center>"; ?></td>
							<?php echo "</tr>";
					}
					?>
               
               
                </tbody>
                <tfoot>
              
                </tfoot>
              </table>
			  
            </div>
            <!-- /.box-body -->
          </div>
            </div>
			
            <!-- /.box-body -->
          </div>
					
				</div>
	
		
		</div>

    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          

         
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
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
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
