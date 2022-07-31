<?php include"includes/db.php" ?>
<?php include"includes/header.php" ?>

<?php include"includes/navigation.php" ?>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
				<h1>Imperare sibi maximum imperium est</h1>
				<?php 
					$query = "SELECT * FROM posts WHERE post_status = 'published' ";
					$selectAllPostsQuery = mysqli_query($connection, $query);

          while($row = mysqli_fetch_assoc($selectAllPostsQuery)) {
						$post_id = $row['post_id'];
            $post_title = $row['post_title'];
						$post_author = $row['post_author'];
						$post_date = $row['post_date'];
						$post_image = $row['post_image'];
						$post_content = substr($row['post_content'], 0, 100);
						$post_status = $row['post_status'];
					
						//Problem z if - dodaje na każdej stornie gdzie są opublikowane wpisy echo tyle razy ile przechodzi pętla
						//do naprawy po dodaniu reszty funkcjonalności

						// if($post_status !== 'published') {
						// 	echo "<h2>Imperium na tej stronie nie opublikowało jeszcze wpisów</h2>";
						// } else {
					
						?>
        			<h2>
          			<a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title ?></a>
        			</h2>
        			<p class="lead">
          			autor: 
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
								Więcej 
								<span class="glyphicon glyphicon-chevron-right"></span>
							</a>
							<hr>
        		<?php } ?>
    	</div>
    <?php include "includes/sidebar.php" ?>
  </div>
	<hr>
<?php include "includes/footer.php" ?>
