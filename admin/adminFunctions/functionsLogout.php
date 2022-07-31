<?php 
  function Logout() {
    if(isset($_SESSION['user_role'])) {
      if($_SESSION['user_role'] !== 'admin') {
        header("Location: ../index.php");
      }
    } else if(!isset($_SESSION['user_role'])) {
      header("Location: ../index.php");
    }
  }
?>
