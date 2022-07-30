<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">Namiot dowódcy</a>
  </div>
  <!-- Top Menu Items -->
  <ul class="nav navbar-right top-nav">
    <li>
      <a href="../index.php">Powrót na front</a>
    </li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-user"></i>John Smith<b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li>
          <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i>Wyloguj</a>
        </li>
      </ul>
    </li>
  </ul>
  <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
      <li>
        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
      </li>
      <li>
        <a href="javascript:;" data-toggle="collapse" data-target="#postsDropdown"><i class="fa fa-fw fa-arrows-v"></i>Wpisy<i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="postsDropdown" class="collapse">
          <li>
            <a href="./posts.php">Wszystkie wpisy</a>
          </li>
          <li>
            <a href="posts.php?source=addPost">Dodaj wpis</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="./categories.php"><i class="fa fa-fw fa-desktop"></i>Strony</a>
      </li>
      <li class="">
        <a href="./comments.php"><i class="fa fa-fw fa-file"></i>Komentarze</a>
      </li>
      <li>
        <a href="#" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>Użytkownicy<i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="demo" class="collapse">
          <li>
            <a href="users.php">Wszyscy użytkownicy</a>
          </li>
          <li>
            <a href="users.php?source=addUser">Dodaj użytkownika</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="profile.php"><i class="fa fa-fw fa-dashboard"></i>Profil</a>
      </li>
    </ul>
  </div>
  <!-- /.navbar-collapse -->
</nav>