<?php 
  function PromotionUser() {
    global $connection;

    if(isset($_GET['promotion'])) {
      $promotionUserId = $_GET['promotion'];
  
      $query = "UPDATE users SET user_role = 'admin' WHERE user_id = $promotionUserId";
      $promotionUserQuery = mysqli_query($connection, $query);
      header('Location: users.php');
    }
  }

  function DegradationUser() {
    global $connection;

    if(isset($_GET['degradation'])) {
      $degradationUserId = $_GET['degradation'];
  
      $query = "UPDATE users SET user_role = 'użytkownik' WHERE user_id = $degradationUserId";
      $degradationUserQuery = mysqli_query($connection, $query);
      header('Location: users.php');
    }
  }

  function DeleteUser() {
    global $connection;

    if(isset($_GET['delete'])) {
      $deleteUserId = $_GET['delete'];
  
      $query = "DELETE FROM users WHERE user_id = {$deleteUserId} ";
      $deleteUserQuery = mysqli_query($connection, $query);
      header('Location: users.php');
    }
  }
?>