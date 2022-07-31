<?php 
  function ApproveComment() {
    global $connection;

    if(isset($_GET['approve'])) {
      $approveCommentId = $_GET['approve'];
  
      $query = "UPDATE comments SET comment_status = 'imprimatur' WHERE comment_id = $approveCommentId";
      $approvedCommentQuery = mysqli_query($connection, $query);
      header('Location: comments.php');
    }
  }

  function UnapprovedComment() {
    global $connection;

    if(isset($_GET['unapproved'])) {
      $unapprovedCommentId = $_GET['unapproved'];
  
      $query = "UPDATE comments SET comment_status = 'odrzucony' WHERE comment_id = $unapprovedCommentId";
      $unapprovedCommentQuery = mysqli_query($connection, $query);
      header('Location: comments.php');
    }
  }

  function DeleteComment() {
    global $connection;

    if(isset($_GET['delete'])) {
      $deleteCommentId = $_GET['delete'];
  
      $query = "DELETE FROM comments WHERE comment_id = {$deleteCommentId} ";
      $deleteQuery = mysqli_query($connection, $query);
      header('Location: comments.php');
    }
  }
?>