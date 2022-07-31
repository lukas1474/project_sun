<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nazwa</th>
      <th>Imię</th>
      <th>Nazwisko</th>
      <th>E-mail</th>
      <th>Poziom dostępu</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    $query = "SELECT * FROM users";
    $selectUsers = mysqli_query($connection, $query);
            
    while($row = mysqli_fetch_assoc($selectUsers)) {
      $user_id = $row['user_id'];
      $username = $row['username'];
      $user_password = $row['user_password'];
      $user_firstname = $row['user_firstname'];
      $user_lastname = $row['user_lastname'];
      $user_email = $row['user_email'];
      $user_image = $row['user_image'];
      $user_role = $row['user_role'];

      echo "<tr>";
      echo "<td>{$user_id}</td>";
      echo "<td>{$username}</td>";
      echo "<td>{$user_firstname}</td>";
      echo "<td>{$user_lastname}</td>";
      echo "<td>{$user_email}</td>";
      echo "<td>{$user_role}</td>";

      echo "<td><a href='users.php?promotion={$user_id}'>Awansuj</a></td>";
      echo "<td><a href='users.php?degradation={$user_id}'>Degraduj</a></td>";
      echo "<td><a href='users.php?source=editUser&edit_user={$user_id}'>Edytuj</a></td>";
      echo "<td><a href='users.php?delete={$user_id}'>Usuń</a></td>";
      echo "</tr>";
    }
  ?>
  </tbody>
</table>
<?php
  PromotionUser();
  DegradationUser();
  DeleteUser();
?>
