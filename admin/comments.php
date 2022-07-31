<?php include "includes/adminHeader.php" ?>

<div id="wrapper">
  <?php include "includes/adminNavigation.php" ?>
  <div id="page-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="page-header">
            Publiczne wypowiedzi obywateli do publikacji
          </h2>
          <?php 
            if(isset($_GET['source'])) {
              $source = $_GET['source'];
            } else {
              $source = '';
            }
            switch($source) {
              default:
              include "includes/viewAllComments.php";
              break;
            }
          ?>
        </div>
      </div>
    </div>
  </div>
<?php include "includes/adminFooter.php" ?>
    