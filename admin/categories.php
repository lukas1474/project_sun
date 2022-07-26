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
            <small>widok stron</small>
          </h1>
          <div class="col-md-6">
            <?php InsertCategories(); ?>
            <form action="" method="post">
              <div class="form-group">
                <label for="cat_title">Dodaj nową stronę</label>
                <input class="form-control" type="text" name="cat_title">
              </div>
              <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit" value="Dodaj">
              </div>
            </form>
            <?php EditCategory(); ?>
          </div>
          <div class="col-md-6">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nazwa strony</th>
                </tr>
              </thead>
              <tbody>
                <?php FindAllCategories(); ?>
                <?php DeleteCategories(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->

<?php include "includes/AdminFooter.php" ?>    