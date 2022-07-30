<?php include "functions.php" ?>
<?php include "../includes/db.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<?php 
  if(isset($_SESSION['user_role'])) {
    if($_SESSION['user_role'] !== 'admin') {
      header("Location: ../index.php");
    }
  } else if(!isset($_SESSION['user_role'])) {
    header("Location: ../index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>admin page - Imperium</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
