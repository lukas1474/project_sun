<?php 
  function addSectionHeadInformation() {
    global $connection;

    if(isset($_GET['category'])) {
      $metaPage = $_GET['category'];

      $query = "SELECT * FROM categories WHERE cat_id = $metaPage";
      $metaPageToShow = mysqli_query($connection, $query);

      while($row = mysqli_fetch_assoc($metaPageToShow)) {
        $cat_id = $row['cat_id'];
        $pageMetaTitle = $row['cat_meta_title'];
        $pageMetaDescription = $row['cat_meta_description'];
        $pageMetaIndex = $row['cat_meta_index']; 
        $pageMetaFollow = $row['cat_meta_follow'];
      }

      if($cat_id === $metaPage) {
        echo "<title>{$pageMetaTitle}</title>";
        echo "<meta name='description' content='{$pageMetaDescription}'>";
        echo "<meta name='robots' content='{$pageMetaIndex}, {$pageMetaFollow}'/>";
      } else {
        echo "<title>'Ogólny opis'</title>";
        echo "<meta name='description' content=''>";
        echo "<meta name='robots' content='index, follow'/>";
      }
    }
  }
?>
