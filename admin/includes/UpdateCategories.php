<?php 
  if(isset($_POST['updateCategory'])) {
    $editCatId = $_POST['cat_title'];

    $query = "UPDATE categories SET cat_title = '{$editCatId}' WHERE cat_id = {$cat_id} ";
    $editQuery = mysqli_query($connection, $query);

    if(!$editQuery) {
      'QUERY FIELD' . mysqli_error($connection);
    }
  }
?>
<form action="" method="post">
  <div class="form-group">
    <label for="cat_title">Zmień tytuł strony</label>
    <?php 
      if(isset($_GET['edit'])) {
        $editCatId = $_GET['edit'];
                  
        $query = "SELECT * FROM categories WHERE cat_id = $editCatId ";
        $selectCategoriesToEdit = mysqli_query($connection, $query);

        while($row = mysqli_fetch_assoc($selectCategoriesToEdit)) {
          $cat_id = $row['cat_id'];
          $cat_title = $row['cat_title'];

          ?>
          <input 
            value="<?php if(isset($cat_title)) {echo $cat_title;} ?>" 
            class="form-control" 
            type="text" 
            name="cat_title"
          >
          <?php 
        }
      }
    ?>
  </div>
  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="updateCategory" value="Zaktualizuj">
  </div>
</form>
