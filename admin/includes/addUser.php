<?php 
  if(isset($_POST['create_user'])) {
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_role = $_POST['user_role'];
    $username = $_POST['username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $query = "INSERT INTO users(user_firstname, user_lastname, user_role, username, user_email, user_password) ";
    $query .= "VALUES('{$user_firstname}', '{$user_lastname}', '{$user_role}', '{$username}', '{$user_email}', '{$user_password}') ";

    $addUserQuery = mysqli_query($connection, $query);

    ConfirmQuery($addUserQuery);
  }
?>
<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="user_firstname">Imię</label>
    <input type="text" class="form-control" name="user_firstname">
  </div>
  <div class="form-group">
    <label for="user_lastname">Nazwisko</label>
    <input type="text" class="form-control" name="user_lastname">
  </div>
  <div class="form-group">
    <label for="user_role">Nadaj poziom dostępu</label>
    <select name="user_role" id="">
      <option value="użytkownik">wybierz</option>
      <option value="admin">Administrator</option>
      <option value="użytkownik">Normalny</option>
    </select>
  </div>
  <div class="form-group">
    <label for="username">Użytkownik</label>
    <input type="text" class="form-control" name="username">
  </div>
  <div class="form-group">
    <label for="user_email">E-mail</label>
    <input type="email" class="form-control" name="user_email">
  </div>
  <div class="form-group">
    <label for="user_password">Hasło</label>
    <input type="password" class="form-control" name="user_password">
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="create_user" value="Podpisz kartę">
  </div>
</form>
