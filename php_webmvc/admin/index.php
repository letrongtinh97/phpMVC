<!DOCTYPE html>
<html lang="en">
<?php 
  //  include '../../config/session.php';

  include './../config/session.php';
  Session::checkSession();
  if (isset($_GET['action']) && $_GET['action']=='logout') {
    // your code.
    Session::destroy();
    
   }
?>
<?php
  header("Cache-Control: no-cache, must-revalidate");
  header("Pragma: no-cache"); 
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
  header("Cache-Control: max-age=2592000");
  ?>    
<?php
  include 'inc/header.php';
?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php
      include 'inc/sliderBar.php';
    ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <?php
        include 'inc/mainContent.php';
      ?>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php
        include 'inc/footer.php';
      ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  
   <?php
    include 'inc/logout.php';
   ?>
  <!-- Bootstrap core JavaScript-->
  <?php
    include 'inc/script.php';
  ?>
