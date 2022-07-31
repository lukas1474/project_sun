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

      echo "<td><a href='users.php?promotion={$user_id}'>Awansuj</a></td>";
      echo "<td><a href='users.php?degradation={$user_id}'>Degraduj</a></td>";
      echo "<td><a href='users.php?source=editUser&edit_user={$user_id}'>Edytuj</a></td>";
      echo "<td><a href='users.php?delete={$user_id}'>Usuń</a></td>";
      echo "</tr>";
    }
  ?>
  </tbody>
</table>
<?php
  if(isset($_GET['promotion'])) {
    $promotionUserId = $_GET['promotion'];

    $query = "UPDATE users SET user_role = 'admin' WHERE user_id = $promotionUserId";
    $promotionUserQuery = mysqli_query($connection, $query);
    header('Location: users.php');
  }

  if(isset($_GET['degradation'])) {
    $degradationUserId = $_GET['degradation'];

    $query = "UPDATE users SET user_role = 'użytkownik' WHERE user_id = $degradationUserId";
    $degradationUserQuery = mysqli_query($connection, $query);
    header('Location: users.php');
  }

  if(isset($_GET['delete'])) {
    $deleteUserId = $_GET['delete'];

    $query = "DELETE FROM users WHERE user_id = {$deleteUserId} ";
    $deleteUserQuery = mysqli_query($connection, $query);
    header('Location: users.php');
  }
?>
