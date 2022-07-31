<?php include "functions.php" ?>
<?php include "../includes/db.php" ?>
<?php include "adminFunctions/functionsPosts.php" ?>
<?php include "adminFunctions/functionsLogout.php" ?>
<?php include "adminFunctions/functionsComments.php" ?>
<?php include "adminFunctions/functionsUsers.php" ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<?php Logout();?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title></title>
  <meta name="robots" content="noindex, nofollow"/>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/sb-admin.css" rel="stylesheet">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
