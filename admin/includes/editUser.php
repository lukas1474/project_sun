<?php 
  if(isset($_GET['edit_user'])) {
    $editUserId = $_GET['edit_user'];

    $query = "SELECT * FROM users WHERE user_id = $editUserId";
    $selectUsersQuery = mysqli_query($connection, $query);
            
    while($row = mysqli_fetch_assoc($selectUsersQuery)) {
      $user_id = $row['user_id'];
      $username = $row['username'];
      $user_password = $row['user_password'];
      $user_firstname = $row['user_firstname'];
      $user_lastname = $row['user_lastname'];
      $user_email = $row['user_email'];
      $user_image = $row['user_image'];
      $user_role = $row['user_role'];
    }
  }

  if(isset($_POST['edit_user'])) {
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_role = $_POST['user_role'];
    $username = $_POST['username'];
    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $query = "UPDATE users SET ";
    $query .="user_firstname = '{$user_firstname}', ";
    $query .="user_lastname = '{$user_lastname}', ";
    $query .="user_role = '{$user_role}', ";
    $query .="username = '{$username}', ";
    $query .="user_email = '{$user_email}', ";
    $query .="user_password = '{$user_password}' ";
    $query .= "WHERE user_id = {$editUserId} ";

    $updateUserQuery = mysqli_query($connection, $query);

    ConfirmQuery($updateUserQuery);
  }
?>
<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="user_firstname">Imię</label>
    <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="user_firstname">
  </div>
  <div class="form-group">
    <label for="user_lastname">Nazwisko</label>
    <input type="text"  value="<?php echo $user_lastname; ?>" class="form-control" name="user_lastname">
  </div>
  <div class="form-group">
    <label for="user_role">Nadaj poziom dostępu</label>
    <select name="user_role" id="">
      <option value="użytkownik"><?php echo $user_role; ?></option>
      <?php 
        if($user_role == 'admin') {
          echo "<option value='użytkownik'>Normalny</option>";
        } else {
          echo "<option value='admin'>Administrator</option>";
        }
      ?>
    </select>
  </div>
  <div class="form-group">
    <label for="username">Użytkownik</label>
    <input type="text"  value="<?php echo $username; ?>" class="form-control" name="username">
  </div>
  <div class="form-group">
    <label for="user_email">E-mail</label>
    <input type="email"  value="<?php echo $user_email; ?>" class="form-control" name="user_email">
  </div>
  <div class="form-group">
    <label for="user_password">Hasło</label>
    <input type="password"  value="<?php echo $user_password; ?>" class="form-control" name="user_password">
  </div>
  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="edit_user" value="Zmień">
  </div>
</form>
