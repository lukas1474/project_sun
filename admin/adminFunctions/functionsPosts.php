<?php 
  function AddNewPost() {
    global $connection;

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
  
      move_uploaded_file($postImageTemp, "../images/$postImage" );
  
      $query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_status) ";
      $query .= "VALUES('{$postCategoryId}', '{$postTitle}', '{$postAuthor}', now(), '{$postImage}', '{$postContent}', '{$postTags}', '{$postStatus}' ) ";
  
      $addPostQuery = mysqli_query($connection, $query);
  
      ConfirmQuery($addPostQuery);
    }
  }

  function SelectPageForPost() {
    global $connection;

    $query = "SELECT * FROM categories";
    $selectCategoriesInEditPost = mysqli_query($connection, $query);

    ConfirmQuery($selectCategoriesInEditPost);

    while($row = mysqli_fetch_assoc($selectCategoriesInEditPost)) {
      $cat_id = $row['cat_id'];
      $cat_title = $row['cat_title'];

      echo "<option value='{$cat_id}'>{$cat_title}</option>";
    }
  }

  function EditPageForPost() {
    global $connection;
    
    $query = "SELECT * FROM categories";
    $selectCategoriesInEditPost = mysqli_query($connection, $query);

    ConfirmQuery($selectCategoriesInEditPost);

    while($row = mysqli_fetch_assoc($selectCategoriesInEditPost)) {
      $cat_id = $row['cat_id'];
      $cat_title = $row['cat_title'];

      echo "<option value='{$cat_id}'>{$cat_title}</option>";
    }
  }

  function DeletePost() {
    global $connection;

    if(isset($_GET['delete'])) {
      $deletePostId = $_GET['delete'];
  
      $query = "DELETE FROM posts WHERE post_id = {$deletePostId} ";
      $deleteQuery = mysqli_query($connection, $query);
      header('Location: posts.php');
    }
  }
?>