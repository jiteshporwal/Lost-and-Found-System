<!--  -->
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
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
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
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->

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
   <!-- Your existing HTML code -->
<!-- Your existing HTML code -->
<div class="user-panel mt-3 pb-3 mb-3 d-flex">
   <div class="image" onclick="toggleImageUploadForm()" ondblclick="toggleImageUploadForm()">
      <?php
      session_start(); 
      // Fetch user's profile image path from the database
      $profileImagePath = "user_images/default_avatar.png"; // Provide a default image path

      // Check if the user has a custom image
      if (file_exists($profileImagePath)) {
        echo '<img src="http://localhost/Lost and Found System/images/' . $row['Userimage'] . '" alt="Uploaded Image" width="100px" height="100px">';
      } else {
         echo '<img src="dist/img/avatar.png" class="img-square elevation-3" style="width:30px; border-radius:10%;" alt="Default Image">';
      }
      ?>
   </div>

   <div class="info">
      <a href="#" class="d-block" style="margin-top: -12px"><?php session_start();  echo $_SESSION["username"]; ?></a>
      <a href="" style="color: #239db1; font-size: 15px"><i class="fa fa-circle text-primary" style="font-size: 13px;"></i> User</a>
   </div>
</div>
   
<!-- Hidden image upload form -->
<form id="imageUploadForm" action="upload_image.php" method="post" enctype="multipart/form-data" style="display: none;">
   <input type="file" name="profile_image" accept="image/*">
   <input type="submit" value="Upload Image">
</form>

<script>
   function toggleImageUploadForm() {
      // Get the image upload form
      var form = document.getElementById("imageUploadForm");

      // Toggle the display style based on its current state
      form.style.display = (form.style.display === "block") ? "none" : "block";
   }
</script>



   <!-- Sidebar user panel (optional) -->
   <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          
   <img src="dist/img/avatar.png" class="img-square elevation-3" style="width:30px;  border-radius:10%;" alt="User Image">        </div>
        <div class="info">
        <a href="#" class="d-block" style="margin-top: -12px"></a>
        <a href="" style="color: #239db1; font-size: 15px"><i class="fa fa-circle text-primary" style="font-size: 13px;"></i> User</a>
        </div> -->

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item menu-open">
            <a href="lostandfoundusers.php" class="nav-link active">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
               Lost and Found Item
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="report.php" class="nav-link">
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
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lost and Found Item</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="lostandfoundusers.php">Home</a></li>
              <li class="breadcrumb-item active">Lost and Found</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
                  <div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
            <th width="20%" height="20%">image</th>    
            <th>Post Category</th>
                <th>Title</th>
                <th>Description</th>
                <th>Date</th>
                <th>Time</th>
                <th>Location</th>
                <th>Post Type</th>
                <th>Status of your item</th>
                <th>Your details</th>    
            </tr>
        </thead>
        <tbody>
            <?php
            // Your database connection code goes here
            $con = mysqli_connect('localhost', 'root', '', '18--db');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            // SQL query to fetch data from your table
            $query = "SELECT * FROM posts";
            $result = mysqli_query($con, $query);

            // Check if there are rows in the result
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo '<td><img src="http://localhost/Lost and Found System/images/' . $row['image'] . '" alt="Uploaded Image" width="100px" height="100px"></td>';
                    echo "<td>" . $row['post_category'] . "</td>";
                    echo "<td>" . $row['title'] . "</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    echo "<td>" . $row['post_date'] . "</td>";
                    echo "<td>" . $row['post_time'] . "</td>";
                    echo "<td>" . $row['location'] . "</td>";
                    echo "<td>" . $row['post_type'] . "</td>";
                    echo "<td>" . $row['status'] . "</td>";
                    echo "<td>" . $row['member'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='12'>No data found</td></tr>";
            }

            // Close the database connection
            mysqli_close($con);
            ?>
        </tbody>
       
    </table>
</div>
<div class="modal fade" id="edit">
                        <div class="modal-dialog modal-sm">
                            <form action="">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Update Barangay</h4>
                              <button type="button" class="open" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="card card-primary">
                              <div class="card-body">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Barangay</label>
                                  <input type="text" class="form-control" id="" placeholder="Enter Barangay Name ..">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Information</label>
                                  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                              </div>
                          </div>
                            <div class="modal-footer justify-content-between">
                              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                              <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>
                            </div>
                          </div>
                          </form>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Footer <a href="">Lost and Found System</a>.</strong>
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
