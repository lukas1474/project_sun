<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">Namiot dowódcy</a>
  </div>
  <ul class="nav navbar-right top-nav">
    <li>
      <a href="../index.php">Wyjdź z namiotu</a>
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
          <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i>Odejdź</a>
        </li>
      </ul>
    </li>
  </ul>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
      <li>
        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Sala narad</a>
      </li>
      <li>
        <a href="javascript:;" data-toggle="collapse" data-target="#postsDropdown"><i class="fa fa-fw fa-arrows-v"></i>Edykty<i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="postsDropdown" class="collapse">
          <li>
            <a href="./posts.php">Wszystkie edykty</a>
          </li>
          <li>
            <a href="posts.php?source=addPost">Ogłoś edykt</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="./categories.php"><i class="fa fa-fw fa-desktop"></i> Prowincje</a>
      </li>
      <li class="">
        <a href="./comments.php"><i class="fa fa-fw fa-file"></i> Wypowiedzi</a>
      </li>
      <li>
        <a href="#" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>Demografia<i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="demo" class="collapse">
          <li>
            <a href="users.php">Spis</a>
          </li>
          <li>
            <a href="users.php?source=addUser">Dodaj obywatela</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="profile.php"><i class="fa fa-fw fa-dashboard"></i> Karta obywatela</a>
      </li>
    </ul>
  </div>
</nav>