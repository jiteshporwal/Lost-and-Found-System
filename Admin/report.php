<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mandsaur university Lost and Found System </title>


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/styles.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=-7eSns8llm-RMrRDsxHMEIf7RLOedtIl6ZakLhKnAVIi-rbZhzluH4rAXuSX_8wNGEWusUgzMC9IkFMaNASdxErVoYrB2Z8hTL1irKOppalmPhXlsdexC0odXcoEnuLC" charset="UTF-8"></script></head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    
    </ul>
  <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
     
    </ul>
  </nav>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="dist/img/mandsaur university.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Mandsaur university</br>Lost and Found</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
   <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
   <img src="dist/img/avatar.png" class="img-square elevation-3" style="width:30px;  border-radius:10%;" alt="User Image">        </div>
        <div class="info">
        <a href="#" class="d-block" style="margin-top: -12px"><?php session_start();  echo $_SESSION["username"]; ?></a>
        <a href="" style="color: #239db1; font-size: 15px"><i class="fa fa-circle text-primary" style="font-size: 13px;"></i> User</a>
        </div>

      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="lostandfoundusers.php" class="nav-link">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
               Lost and Found Item
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="report.php" class="nav-link active">
              <i class="nav-icon fas fa-report"></i>
              <p>
                Report
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="http://localhost/Lost%20and%20Found%20System/index.php" class="nav-link">
                 <i class="nav-icon fas fa-power-off"></i>
              <p>
                Logout
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->1
  </aside>

  <div class="container-form">
        <h1>report form</h1>
        <form id="postForm" action="post-upload.php" method="POST" enctype="multipart/form-data"> <!-- Replace 'process_post.php' with your processing script -->
            <div class="form-group">
                <label for="post_category">Post Category</label>
                <input type="text" id="post_category" name="post_category" placeholder="accessories,books,money,etc..." required >
            </div>
            <form action="upload.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="image">Choose an Image:</label>
            <input type="file" name="image" id="image" accept="image/*" required>
        </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="time">Time</label>
                <input type="time" id="time" name="time" required>
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" id="location" name="location" placeholder="where you lost & found" required>
            </div>
            <div class="form-group">
                <label for="postType">Post Type</label>
                <select id="postType" name="postType" required>
                    <option value="Type 1">LOST</option>
                    <option value="Type 2">Found</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <div class="form-group">
                <label for="member">Your details</label>
                <input type="text" id="member" name="member" placeholder="your name,department-branch,semester."required>
            </div>
            <div class="form-group">
                <label for="status">Status of item</label>
                <input type="text" id="status" name="status" placeholder="condition,how old,etc..."required>
            </div>
            
            <input type="submit" name="submit" value="Upload">
        </form>
    </div>
    <footer class="main-footer">
    <strong>Footer <a href="">Mandsaur university Lost and Found System</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Footer</b>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="scripts.js"></script> <!-- Link to your JavaScript file for validation -->
    
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": [""]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
