<?php include "includes/AdminHeader.php" ?>

<div id="wrapper">
  <!-- Navigation -->
  <?php include "includes/AdminNavigation.php" ?>

  <div id="page-wrapper">
    <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">
            Dzień dobry :)
            <small>widok wpisów</small>
          </h1>
          <?php 
            if(isset($_GET['source'])) {
              $source = $_GET['source'];
            } else {
              $source = '';
            }
            switch($source) {
              case 'addPost';
              include "includes/addPost.php";
              break;

              case '100';
              echo 'NICE 100';
              break;

              case '200';
              echo 'NICE 200';
              break;

              default:
              include "includes/viewAllPosts.php";
              break;
            }
          ?>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->

<?php include "includes/AdminFooter.php" ?>    