<!DOCTYPE html>
<html lang="en">

<?php
    include 'inc/category/header.php';
?>
<?php 

include '../controllers/categoriesController.php';
?>
<?php 
  $cat  = new CategoriesController();
  
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
      <div id="content">

        <!-- Topbar -->
        <?php
        include 'inc/category/topBar.php';
        ?>
          
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
                <div>
            <a href="addCategory.php" class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-info-circle"></i>
                    </span>
                    <span class="text">Add</span>
            </a>
                  <a href="#" class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-info-circle"></i>
                    </span>
                    <span class="text">Update</span>
                  </a>
                  <a href="#" class="btn btn-info btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-info-circle"></i>
                    </span>
                    <span class="text">Delete</span>
                  </a>  
            </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      <?php 
                      $show_cate = $cat->showCategory();
                      if(isset($show_cate)){
                          $i = 0;
                          while($result =$show_cate->fetch_assoc(   )){
                            $i++;
                          
                      
                      ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $result['ct_name']; ?></td>
                      <td><a href="updateCategory.php?ct_id=<?php echo $result['ct_id']  ?>">Edit</a> || <a href="?ct_id=<?php echo $result['ct_id']  ?>">Xoa</a></td>
                      <?php 
                      }
                    }
                      ?>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
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
    include 'inc/category/script.php';
   ?>
