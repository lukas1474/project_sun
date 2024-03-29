<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Autor</th>
      <th>Komentarz</th>
      <th>E-mail</th>
      <th>Status</th>
      <th>Komentowany wpis</th>
      <th>Data</th>
    </tr>
  </thead>
  <tbody>

  <?php 
    $query = "SELECT * FROM comments";
    $selectComments = mysqli_query($connection, $query);
            
    while($row = mysqli_fetch_assoc($selectComments)) {
      $comment_id = $row['comment_id'];
      $comment_post_id = $row['comment_post_id'];
      $comment_author = $row['comment_author'];
      $comment_content = $row['comment_content'];
      $comment_email = $row['comment_email'];
      $comment_status = $row['comment_status'];
      $comment_date = $row['comment_date'];

      echo "<tr>";
      echo "<td>{$comment_id}</td>";
      echo "<td>{$comment_author}</td>";
      echo "<td>{$comment_content}</td>";
      echo "<td>{$comment_email}</td>";
      echo "<td>{$comment_status}</td>";

      $query = "SELECT * FROM posts WHERE post_id = $comment_post_id ";
      $selectPostIdQuery = mysqli_query($connection, $query);

      while($row = mysqli_fetch_assoc($selectPostIdQuery)){
        $post_id = $row['post_id'];
        $post_title = $row['post_title'];

        echo "<td><a href='../post.php?p_id=$post_id'>$post_title</td>";
      }

      echo "<td>{$comment_date}</td>";
      echo "<td><a href='comments.php?approve={$comment_id}'>Imprimatur</a></td>";
      echo "<td><a href='comments.php?unapproved={$comment_id}'>Odrzuć</a></td>";
      echo "<td><a href='comments.php?delete={$comment_id}'>Usuń</a></td>";
      echo "</tr>";
    }
  ?>
  </tbody>
</table>
<?php
  ApproveComment();
  UnapprovedComment();
  DeleteComment();
?>
