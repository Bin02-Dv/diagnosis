<?php 
  require_once('classes/User.php');
  $user = new User();
  $user->isAdmin();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Malaria Diagnosis </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="admin.php" class="nav-link">Home</a>
      </li>
  
    </ul>

    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" href="logout.php">
          <i class="far fa-sign-out"></i>
          Logout
        </a>
        
      </li>      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="admin3.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">MalariaDiagnosis</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">        
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['username']?></a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="admin.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                HOME
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="admin_diagnosis.php" class="nav-link">
              <i class="nav-icon fas fa-notes-medical"></i>
              <p>
                Diagnose Now
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="knowledge.php" class="nav-link">
              <i class="nav-icon fas fa-laptop-medical"></i>
              <p>
                Knowledge Base
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="history.php" class="nav-link">
              <i class="nav-icon fas fa-laptop-medical"></i>
              <p>
                Medical History
              </p>
            </a>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Diagnosis</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Diagnosis</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        
        <!-- /.row -->

       
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            
            <!-- /.card -->
            <div class="row">
              <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-danger">
                  
                  <!-- /.card-header -->
                  <!-- form start -->
                  <?php 
                    if (isset($_POST['submit'])) {
                      $r = $user->saveKnowledge($_POST['an'],$_POST['n'],$_POST['d'],$_POST['f'],$_POST['j'],$_POST['w'],$_POST['e'],$_POST['h'],$_POST['v'],$_POST['jp'],$_POST['la'],$_POST['result'],$_POST['prescription']);
                      if ($r ==1) {
                        echo '
                          <div class="alert alert-success">Knowledge succesfully saved.</div>
                        ';
                      }
                      
                      // echo ;
                    }
                    
                      echo '
                      <form action="newKnowledge.php" method="POST">
                      <div class="card-body row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Anemia</label>
                            <select class="form-control form-control-sm form-control form-control-sm-sm"  name="an" id="an">
                              <option value="1">Low</option>
                              <option value="2">Average</option>
                              <option value="3">High</option>
                              <option value="4">Very high</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Nausea</label>
                            <select class="form-control form-control-sm"  name="n" id="n">
                              <option value="1">Low</option>
                              <option value="2">Average</option>
                              <option value="3">High</option>
                              <option value="4">Very high</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Dizziness</label>
                            <select class="form-control form-control-sm"  name="d" id="d">
                              <option value="1">Low</option>
                              <option value="2">Average</option>
                              <option value="3">High</option>
                              <option value="4">Very high</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Fever</label>
                            <select class="form-control form-control-sm"  name="f" id="f">
                              <option value="1">Low</option>
                              <option value="2">Average</option>
                              <option value="3">High</option>
                              <option value="4">Very high</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Jaundice</label>
                            <select class="form-control form-control-sm"  name="j" id="j">
                              <option value="1">Low</option>
                              <option value="2">Average</option>
                              <option value="3">High</option>
                              <option value="4">Very high</option>
                            </select>
                          </div>
                          <div class="form-group">
                              <label for="exampleInputEmail1">Body Weakness</label>
                              <select class="form-control form-control-sm"  name="w" id="w">
                                <option value="1">Low</option>
                                <option value="2">Average</option>
                                <option value="3">High</option>
                                <option value="4">Very high</option>
                              </select>
                          </div>
                         
                        </div>
                        <div class="col-lg-6">
                          
                          <div class="form-group">
                            <label for="exampleInputEmail1">Enlarge Liver</label>
                            <select class="form-control form-control-sm"  name="e" id="e">
                              <option value="1">Low</option>
                              <option value="2">Average</option>
                              <option value="3">High</option>
                              <option value="4">Very high</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Headache</label>
                            <select class="form-control form-control-sm"  name="h" id="h">
                              <option value="1">Low</option>
                              <option value="2">Average</option>
                              <option value="3">High</option>
                              <option value="4">Very high</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Vomitting</label>
                            <select class="form-control form-control-sm"  name="v" id="v">
                              <option value="1">Low</option>
                              <option value="2">Average</option>
                              <option value="3">High</option>
                              <option value="4">Very high</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Joint Pain</label>
                            <select class="form-control form-control-sm"  name="jp" id="jp">
                              <option value="1">Low</option>
                              <option value="2">Average</option>
                              <option value="3">High</option>
                              <option value="4">Very high</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Loos of Appatite</label>
                            <select class="form-control form-control-sm"  name="la" id="la">
                              <option value="1">Low</option>
                              <option value="2">Average</option>
                              <option value="3">High</option>
                              <option value="4">Very high</option>
                            </select>
                          </div>
                          <div class="form-group">
                              <label for="exampleInputEmail1">Result (Malaria):</label>
                              <select class="form-control form-control-sm"  name="result" id="result">
                                <option value="1">Low</option>
                                <option value="2">Average</option>
                                <option value="3">High</option>
                                <option value="4">Very high</option>
                              </select>
                          </div>
                        </div>
                        
                        <div class="form-group">
                              <label for="exampleInputEmail1">Prescription:</label>
                              <textarea name="prescription" class="form-control col-lg-12" cols="118"></textarea>
                        </div>
                      </div>
                      <!-- /.card-body -->
                      
                      <div class="form-group">

                        <div class="card-footer text-center">
                          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </form>
                      ';
                    
                  ?>
                  
                </div>
                <!-- /.card -->
    
                
                <!-- /.card -->
    
              </div>
              <!-- /.col -->

            
              <!-- /.col -->
            </div>
            <!-- /.row -->

           
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; </strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>
