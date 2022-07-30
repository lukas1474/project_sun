<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nazwa</th>
      <th>Imię</th>
      <th>Nazwisko</th>
      <th>E-mail</th>
      <th>Poziom dostępu</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    $query = "SELECT * FROM users";
    $selectUsers = mysqli_query($connection, $query);
            
    while($row = mysqli_fetch_assoc($selectUsers)) {
      $user_id = $row['user_id'];
      $username = $row['username'];
      $user_password = $row['user_password'];
      $user_firstname = $row['user_firstname'];
      $user_lastname = $row['user_lastname'];
      $user_email = $row['user_email'];
      $user_image = $row['user_image'];
      $user_role = $row['user_role'];

      echo "<tr>";
      echo "<td>{$user_id}</td>";
      echo "<td>{$username}</td>";
      echo "<td>{$user_firstname}</td>";

      // $query = "SELECT * FROM categories WHERE cat_id = {$post_category_id} ";
      // $selectCategoriesToEdit = mysqli_query($connection, $query);

      // while($row = mysqli_fetch_assoc($selectCategoriesToEdit)) {
      //   $cat_id = $row['cat_id'];
      //   $cat_title = $row['cat_title'];

      //   echo "<td>{$cat_title}</td>";
      // }

      echo "<td>{$user_lastname}</td>";
      echo "<td>{$user_email}</td>";
      echo "<td>{$user_role}</td>";

      // $query = "SELECT * FROM posts WHERE post_id = $comment_post_id ";
      // $selectPostIdQuery = mysqli_query($connection, $query);

      // while($row = mysqli_fetch_assoc($selectPostIdQuery)){
      //   $post_id = $row['post_id'];
      //   $post_title = $row['post_title'];

      //   echo "<td><a href='../post.php?p_id=$post_id'>$post_title</td>";
      // }

      echo "<td><a href='comments.php?approve='>Zatwierdź</a></td>";
      echo "<td><a href='comments.php?unapproved='>Odrzuć</a></td>";
      echo "<td><a href='comments.php?delete='>Usuń</a></td>";
      echo "</tr>";
    }
  ?>
  </tbody>
</table>
<?php
  if(isset($_GET['approve'])) {
    $approveCommentId = $_GET['approve'];

    $query = "UPDATE comments SET comment_status = 'zatwierdzony' WHERE comment_id = $approveCommentId";
    $approvedCommentQuery = mysqli_query($connection, $query);
    header('Location: comments.php');
  }

  if(isset($_GET['unapproved'])) {
    $unapprovedCommentId = $_GET['unapproved'];

    $query = "UPDATE comments SET comment_status = 'odrzucony' WHERE comment_id = $unapprovedCommentId";
    $unapprovedCommentQuery = mysqli_query($connection, $query);
    header('Location: comments.php');
  }

  if(isset($_GET['delete'])) {
    $deleteCommentId = $_GET['delete'];

    $query = "DELETE FROM comments WHERE comment_id = {$deleteCommentId} ";
    $deleteQuery = mysqli_query($connection, $query);
    header('Location: comments.php');
  }
?>