<?php AddNewPost(); ?>
<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">Tytuł wpisu</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="form-group">
    <label for="post_category">Wybierz stronę</label>
    <select name="post_category" id="">
      <?php SelectPageForPost(); ?>
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
    <input type="submit" class="btn btn-primary" name="create_post" value="Ogłoś edykt">
  </div>
</form>
