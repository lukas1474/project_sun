<?php 
  if(isset($_GET['p_id'])) {
    $editPostId = $_GET['p_id'];
  }

  $query = "SELECT * FROM posts WHERE post_id = $editPostId";
  $selectPostToEdit = mysqli_query($connection, $query);
         
  while($row = mysqli_fetch_assoc($selectPostToEdit)) {
    $post_id = $row['post_id'];
    $post_author = $row['post_author'];
    $post_title = $row['post_title'];
    $post_category_id = $row['post_category_id'];
    $post_status = $row['post_status'];
    $post_image = $row['post_image'];
    $post_content =$row['post_content'];
    $post_tags = $row['post_tags'];
    $post_comment_count = $row['post_comment_count'];
    $post_date = $row['post_date'];
  }

  if(isset($_POST['update_post'])) {
    $post_author = $_POST['post_author'];
    $post_title = $_POST['post_title'];
    $post_category_id = $_POST['post_category'];
    $post_status = $_POST['post_status'];
    $post_image = $_FILES['image']['name'];
    $post_image_temp = $_FILES['image']['tmp_name'];
    $post_content =$_POST['post_content'];
    $post_tags = $_POST['post_tags'];

    move_uploaded_file($post_image_temp, "../images/$post_image");

    if(empty($post_image)) {
      $query = "SELECT * FROM posts WHERE post_id = $editPostId ";
      $select_image = mysqli_query($connection, $query);

      while($row = mysqli_fetch_array($select_image)) {
        $post_image = $row['post_image'];
      }
    }

    $query = "UPDATE posts SET ";
    $query .="post_title = '{$post_title}', ";
    $query .="post_category_id = '{$post_category_id}', ";
    $query .="post_date = now(), ";
    $query .="post_author = '{$post_author}', ";
    $query .="post_status = '{$post_status}', ";
    $query .="post_tags = '{$post_tags}', ";
    $query .="post_content = '{$post_content}', ";
    $query .="post_image = '{$post_image}' ";
    $query .= "WHERE post_id = {$editPostId} ";

    $updatePostQuery = mysqli_query($connection, $query);

    ConfirmQuery($updatePostQuery);
  }
?>

<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="post_title">Tytuł wpisu</label>
    <input value="<?php echo $post_title; ?>" type="text" class="form-control" name="post_title">
  </div>
  <div class="form-group">
    <label for="post_category">Wybierz stronę na której zostanie opublikowany wpis</label>
    <select name="post_category" id="">
      <?php 
        $query = "SELECT * FROM categories";
        $selectCategoriesInEditPost = mysqli_query($connection, $query);

        ConfirmQuery($selectCategoriesInEditPost);

        while($row = mysqli_fetch_assoc($selectCategoriesInEditPost)) {
          $cat_id = $row['cat_id'];
          $cat_title = $row['cat_title'];

          echo "<option value='{$cat_id}'>{$cat_title}</option>";
        }
      ?>
    </select>
  </div>
  <div class="form-group">
    <label for="title">Autor</label>
    <input value="<?php echo $post_author; ?>" type="text" class="form-control" name="post_author">
  </div>
  <div class="form-group">
    <label for="post_status">Status</label>
    <input value="<?php echo $post_status; ?>" type="text" class="form-control" name="post_status">
  </div>
  <div class="form-group">
    <img width="100" src="../images/<?php echo $post_image; ?>" alt="">
    <input type="file" name="image">
  </div>
  <div class="form-group">
    <label for="post_tags">Tagi</label>
    <input value="<?php echo $post_tags; ?>" type="text" class="form-control" name="post_tags">
  </div>
  <div class="form-group">
    <label for="post_content">Treść wpisu</label>
    <textarea name="post_content" class="form-control" id="" cols="30" rows="10"><?php echo $post_content; ?></textarea>
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="update_post" value="Edytuj">
  </div>
</form>