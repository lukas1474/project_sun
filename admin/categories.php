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
                <label for="cat_page_title">Dodaj nagłówek</label>
                <input class="form-control" type="text" name="cat_page_title">
              </div>
              <div class="form-group">
                <label for="cat_meta_title">Dodaj title</label>
                <textarea class="form-control" name="cat_meta_title" id="" cols="30" rows="1"></textarea>
              </div>
              <div class="form-group">
                <label for="cat_meta_description">Dodaj description</label>
                <textarea class="form-control" name="cat_meta_description" id="" cols="30" rows="5"></textarea>
              </div>
              <div class="form-group">
                <label for="cat_robots">Robots</label>
                <select name="cat_meta_index" id="">
                  <option value="noindex">wybierz</option>
                  <option value="index">index</option>
                  <option value="follow">noindex</option>
                </select>
                <select name="cat_meta_follow" id="">
                  <option value="nofollow">wybierz</option>
                  <option value="follow">follow</option>
                  <option value="nofollow">nofollow</option>
                </select>
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