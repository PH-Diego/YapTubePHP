<nav>
  <?php
  if (isset($_SESSION['login'])){
    echo 'Bienvenido ' .$_SESSION['login'];
  } else {
    echo 'No Registrado';
  }
  ?>
  <a href="index.php">Home</a>
  <a href="profile.php">Perfil</a>
  <a href="register_login.php">Registro/Logueo</a>
</nav>
