<?php include"includes/db.php" ?>
<?php include"includes/header.php" ?>

<?php include"includes/navigation.php" ?>

  <div class="container">
    <div class="row">
      <div class="col-md-8">
				<?php 

          if(isset($_GET['p_id'])) {
           $post_id = $_GET['p_id'];
          }

					$query = "SELECT * FROM posts WHERE post_id = {$post_id} ";
					$selectAllPostsQuery = mysqli_query($connection, $query);

          while($row = mysqli_fetch_assoc($selectAllPostsQuery)) {
            $post_title = $row['post_title'];
						$post_author = $row['post_author'];
						$post_date = $row['post_date'];
						$post_image = $row['post_image'];
						$post_content = $row['post_content'];

						?>

						<!-- <h1 class="page-header">
							Page Heading
          		<small>Secondary Text</small>
        		</h1> -->
          	<!-- First Blog Post -->
        		<h2>
          		<a href="#"><?php echo $post_title ?></a>
        		</h2>
        		<p class="lead">
          		by 
							<a href="index.php"><?php echo $post_author ?></a>
        		</p>
        		<p>
						<span class="glyphicon glyphicon-time"></span> 
							<?php echo $post_date ?>
						</p>
        		<hr>
        		<img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
        		<hr>
        		<p><?php echo $post_content ?></p>
        		<a class="btn btn-primary" href="#">
							Read More 
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
						<hr>
            <?PHP 
          } 
        ?>
          
        <?php 
          if(isset($_POST['create_comment'])) {
            $post_id = $_GET['p_id'];

            $comment_author = $_POST['comment_author'];
            $comment_email = $_POST['comment_email'];
            $comment_content = $_POST['comment_content'];

            $query = "INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_status, comment_date)";
            $query .= "VALUES ($post_id, '{$comment_author}', '{$comment_email}', '{$comment_content}', 'unapproved', now())";

            $commentCreateQuery = mysqli_query($connection, $query);

            if(!$commentCreateQuery) {
              die("QUERY FAILED ." . mysqli_error($connection));
            }

            $query = "UPDATE posts SET post_comment_count = post_comment_count + 1 ";
            $query .= "WHERE post_id = $post_id ";

            $updateCommentCount = mysqli_query($connection, $query);
          }
        ?>
        
        <div class="well">
          <h4>Napisz komentarz:</h4>
          <form role="form" action="" method="post">
            <div class="form-group">
              <label for="Author">Autor</label>
              <input type="text" class="form-control" name="comment_author">
            </div>
            <div class="form-group">
              <label for="Author">Email</label>
              <input type="email" class="form-control" name="comment_email">
            </div>
            <div class="form-group">
              <label for="comment">Twój komentarz</label>
              <textarea class="form-control" name="comment_content" rows="3"></textarea>
            </div>
            <button type="submit" name="create_comment" class="btn btn-primary">Prześlij</button>
          </form>
        </div>
        <hr>
        <?php 
          $query = "SELECT * FROM comments WHERE comment_post_id = {$post_id} ";
          $query .= "AND comment_status = 'zatwierdzony' ";
          $query .= "ORDER BY comment_id DESC ";
          $commentQuery = mysqli_query($connection, $query);

          if(!$commentQuery) {
            die("QUERY FAILED ." . mysqli_error($connection));
          }

          while ($row = mysqli_fetch_array($commentQuery)) {
            $comment_date = $row['comment_date'];
            $comment_content = $row['comment_content'];
            $comment_author = $row['comment_author'];

            ?>

            <div class="media">
              <a class="pull-left" href="#">
                  <img class="media-object" src="http://placehold.it/64x64" alt="">
              </a>
              <div class="media-body">
                <h4 class="media-heading">
                  <?php echo $comment_author; ?>
                    <small><?php echo $comment_date; ?></small>
                </h4>
                <?php echo $comment_content; ?>
              </div>
            </div>
            <?php 
          }
        ?>
      </div>
    <?php include "includes/sidebar.php" ?>
  </div>
	<hr>
<?php include "includes/footer.php" ?>
