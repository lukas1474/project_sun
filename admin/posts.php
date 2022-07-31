<?php include "includes/AdminHeader.php" ?>

<div id="wrapper">
  <?php include "includes/AdminNavigation.php" ?>
  <div id="page-wrapper">
    <div class="container-fluid">
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

              case 'editPost';
              include "includes/editPost.php";
              break;

              default:
              include "includes/viewAllPosts.php";
              break;
            }
          ?>
        </div>
      </div>
    </div>
  </div>

<?php include "includes/AdminFooter.php" ?>    