<?php include "includes/adminHeader.php" ?>

<div id="wrapper">
  <?php include "includes/adminNavigation.php" ?>
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="page-header">
            Spis zarządców i obywateli
          </h2>
          <?php 
            if(isset($_GET['source'])) {
              $source = $_GET['source'];
            } else {
              $source = '';
            }
            switch($source) {
              case 'addUser';
              include "includes/addUser.php";
              break;

              case 'editUser';
              include "includes/editUser.php";
              break;

              default:
              include "includes/viewAllUsers.php";
              break;
            }
          ?>
        </div>
      </div>
    </div>
  </div>
<?php include "includes/adminFooter.php" ?>  
