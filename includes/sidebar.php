<div class="col-md-4">
   <div class="well">
    <h4>Logowanie</h4>
    <form action="includes/login.php" method="post">
      <div class="form-group">
        <input name="username" type="text" class="form-control" placeholder="Nazwa użytkownika" >
      </div>
      <div class="input-group">
        <input name="password" type="password" class="form-control" placeholder="Hasło">
        <span class="input-group-btn">
          <button class="btn btn-primary" name="login" type="submit">Zaloguj</button>
        </span>
      </div>
    </form>
  </div>
  <div class="well">
    <h4>Blog Search</h4>
    <form action="search.php" method="post">
      <div class="input-group">
        <input name="search" type="text" class="form-control">
        <span class="input-group-btn">
          <button name="submit" class="btn btn-default" type="submit">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </form>
  </div>
  <!-- <div class="well">
    <?php 
      $query = "SELECT * FROM categories";
      $selectCategoriesSidebar = mysqli_query($connection, $query);
    ?>
    <h4>Blog Categories</h4>
    <div class="row">
      <div class="col-lg-12">
        <ul class="list-unstyled">
          <?php 
            while($row = mysqli_fetch_assoc($selectCategoriesSidebar)) {
              $cat_title = $row['cat_title'];
              $cat_id = $row['cat_id'];
      
              echo "<li><a href='category.php?category=$cat_id'>{$cat_title}</a></li>";
            }
          ?>
        </ul>
      </div>
    </div>
  </div> -->
  <?php include "widget.php" ?>
</div>
