<?php 
  function ConfirmQuery($result) {
    global $connection;

    if(!$result) {
      die("QUERY FAILED ." . mysqli_error($connection));
    }
  }

  function InsertCategories() {
    global $connection;

    if(isset($_POST['submit'])) {
      $catTitle = $_POST['cat_title'];
      $catPageTitle = $_POST['cat_page_title'];
      $catMetaTitle = $_POST['cat_meta_title'];
      $catMetaDescription = $_POST['cat_meta_description'];
      $catMetaIndex = $_POST['cat_meta_index'];
      $catMetaFollow = $_POST['cat_meta_follow'];

      if($catTitle == "" || empty($catTitle)) {
        echo "To pole nie może być puste";
      } else {
        $query = "INSERT INTO categories(cat_title, cat_page_title, cat_meta_title, cat_meta_description, cat_meta_index, cat_meta_follow) ";
        $query .= "VALUE('{$catTitle}', '{$catPageTitle}', '{$catMetaTitle}', '{$catMetaDescription}', '{$catMetaIndex}', '{$catMetaFollow}') "; 

        $createCategoryQuery = mysqli_query($connection, $query);

        if(!$createCategoryQuery) {
          die('QUERY FAILED' . mysqli_error($connection));
        }
      }
    }
  }

  function FindAllCategories() {
    global $connection;
    
    $query = "SELECT * FROM categories";
    $selectCategories = mysqli_query($connection, $query);

    while($row = mysqli_fetch_assoc($selectCategories)) {
      $cat_id = $row['cat_id'];
      $cat_title = $row['cat_title'];
                    
      echo "<tr>";
      echo "<td>{$cat_id}</td>";
      echo "<td>{$cat_title}</td>";
      echo "<td><a href='categories.php?delete={$cat_id}'>Usuń</a></td>";
      echo "<td><a href='categories.php?edit={$cat_id}'>Edytuj</a></td>";
      echo "</tr>";
    } 
  }

  function EditCategory() {
    global $connection;
    
    if(isset($_GET['edit'])) {
      $cat_id = $_GET['edit'];
      include "includes/UpdateCategories.php";
    }
  }

  function DeleteCategories() {
    global $connection;

    if(isset($_GET['delete'])) {
      $deleteCatId = $_GET['delete'];

      $query = "DELETE FROM categories WHERE cat_id = {$deleteCatId} ";
      $deleteQuery = mysqli_query($connection, $query);
      header("Location: categories.php");
    }
  }
?>
