<?php 
  if(isset($_POST['create_post'])) {
    $postTitle = $_POST['title'];
    $postAuthor = $_POST['author'];
    $postCategoryId = $_POST['post_category'];
    $postStatus = $_POST['post_status'];
    
    $postImage = $_FILES['image']['name'];
    $postImageTemp = $_FILES['image']['tmp_name'];

    $postTags = $_POST['post_tags'];
    $postContent = $_POST['post_content'];
    $postDate = date('d-m-y');
    $postCommentCount = 4;

    move_uploaded_file($postImageTemp, "../images/$postImage" );

    $query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_comment_count, post_status) ";
    $query .= "VALUES('{$postCategoryId}', '{$postTitle}', '{$postAuthor}', now(), '{$postImage}', '{$postContent}', '{$postTags}', '{$postCommentCount}', '{$postStatus}' ) ";

    $addPostQuery = mysqli_query($connection, $query);

    ConfirmQuery($addPostQuery);
  }
?>
<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">Tytuł wpisu</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="form-group">
    <label for="post_category">Wybierz stronę</label>
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
    <input type="text" class="form-control" name="author">
  </div>
  <div class="form-group">
    <label for="post_status">Status</label>
    <input type="text" class="form-control" name="post_status">
  </div>
  <div class="form-group">
    <label for="post_image">Obrazek</label>
    <input type="file" name="image">
  </div>
  <div class="form-group">
    <label for="post_tags">Tagi</label>
    <input type="text" class="form-control" name="post_tags">
  </div>
  <div class="form-group">
    <label for="post_content">Treść wpisu</label>
    <textarea name="post_content" class="form-control" id="" cols="30" rows="10"></textarea>
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="create_post" value="Opublikuj">
  </div>
</form>