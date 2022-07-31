<?php 
  if(isset($_GET['edit'])) {
    $editCatId = $_GET['edit'];
              
    $query = "SELECT * FROM categories WHERE cat_id = $editCatId ";
    $selectCategoriesToEdit = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($selectCategoriesToEdit)) {
      $cat_id = $row['cat_id'];
      $cat_title = $row['cat_title'];
      $cat_page_title = $row['cat_page_title'];
      $cat_meta_title = $row['cat_meta_title'];
      $cat_meta_description = $row['cat_meta_description'];
      $cat_meta_index = $row['cat_meta_index'];
      $cat_meta_follow = $row['cat_meta_follow'];
    }
  }

  if(isset($_POST['updateCategory'])) {
    $editCatId = $_POST['cat_title'];
    $catPageTitle = $_POST['cat_page_title'];
    $catMetaTitle = $_POST['cat_meta_title'];
    $catMetaDescription = $_POST['cat_meta_description'];
    $catMetaIndex = $_POST['cat_meta_index'];
    $catMetaFollow = $_POST['cat_meta_follow'];

    $query = "UPDATE categories SET ";
    $query .= "cat_title = '{$editCatId}', ";
    $query .= "cat_page_title = '{$catPageTitle}', ";
    $query .= "cat_meta_title = '{$catMetaTitle}', ";
    $query .= "cat_meta_description = '{$catMetaDescription}', ";
    $query .= "cat_meta_index = '{$catMetaIndex}', ";
    $query .= "cat_meta_follow = '{$catMetaFollow}' ";
    $query .= "WHERE cat_id = {$cat_id} ";

    $editQuery = mysqli_query($connection, $query);

    if(!$editQuery) {
      'QUERY FIELD' . mysqli_error($connection);
    }
  }
?>
<form action="" method="post">
  <div class="form-group">
    <label for="cat_title">Zmień tytuł strony</label>
    <input value="<?php echo $cat_title; ?>" class="form-control" type="text" name="cat_title">
  </div>
  <div class="form-group">
    <label for="cat_page_title">Zmień nagłówek</label>
    <input value="<?php echo $cat_page_title; ?>" class="form-control" type="text" name="cat_page_title">
  </div>
  <div class="form-group">
    <label for="cat_meta_title">Zmień title</label>
    <textarea <?php echo $cat_meta_title; ?> class="form-control" name="cat_meta_title" id="" cols="30" rows="1"><?php echo $cat_meta_title; ?></textarea>
  </div>
  <div class="form-group">
    <label for="cat_meta_description">Zmień description</label>
    <textarea class="form-control" name="cat_meta_description" id="" cols="30" rows="5"><?php echo $cat_meta_description; ?></textarea>
  </div>
  <div class="form-group">
    <label for="cat_meta_index">Robots</label>
    <select name="cat_meta_index" id="">
      <option value="noindex"><?php echo $cat_meta_index; ?></option>
      <?php 
        if($cat_meta_index == 'index') {
          echo "<option value='noindex'>noindex</option>";
        } else {
          echo "<option value='index'>index</option>";
        }
      ?>
    </select>
    <select name="cat_meta_follow" id="">
      <option value="nofollow"><?php echo $cat_meta_follow; ?></option>
      <?php 
        if($cat_meta_follow == 'follow') {
          echo "<option value='nofollow'>nofollow</option>";
        } else {
          echo "<option value='follow'>follow</option>";
        }
      ?>
    </select>
  </div>
  <div class="form-group">
    <input class="btn btn-primary" type="submit" name="updateCategory" value="Zaktualizuj">
  </div>
</form>
