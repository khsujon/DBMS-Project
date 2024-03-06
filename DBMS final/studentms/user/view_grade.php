

<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');
require_once('config.php');

if (strlen($_SESSION['sturecmsstuid']==0)) {
  header('location:logout.php');
  } else{
   
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>Student  Management System|||Dashboard</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- End layout styles -->
   
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
     <?php include_once('includes/header.php');?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include_once('includes/sidebar.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <div class="row">
                
                <div class='col-12 grid-margin stretch-card card'>
                    <h4 class="text-center py-2">View Grade</h4>
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Student Id</th>
                        <th scope="col">Student Class</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Student Grade</th>
                        <th scope="col">Time</th>
                        </tr>
                    </thead>
                    <?php
                    $query="SELECT * FROM `grade`";
                    $runQuery=mysqli_query($connect,$query);
                    
                    while($row=mysqli_fetch_assoc($runQuery)){?>
                    <tbody>

                    <tr>
                    <th><?php echo $row['student_id']?></th>
                    <td><?php echo $row['student_class']?></td>
                    <td><?php echo $row['student_name']?></td>
                    <td><?php echo $row['student_grade']?></td>
                    <td><?php echo $row['time']?></td>
                    </tr>

                    </tbody>
                    <?php

                    }
                    
                    ?>
                   </table>
                </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         <?php include_once('includes/footer.php');?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="./vendors/chart.js/Chart.min.js"></script>
    <script src="./vendors/moment/moment.min.js"></script>
    <script src="./vendors/daterangepicker/daterangepicker.js"></script>
    <script src="./vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html><?php }  ?>