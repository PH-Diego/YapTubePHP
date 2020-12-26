<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <div id="menu">
        <ul>
            <li>Home</li>
            <li class="cerrar-sesion"><a href="logout.php">Cerrar sesión</a></li>
        </ul>
    </div>

    <section>
        <h1>Bienvenido <?php echo $user->getUsername();  ?></h1>
    </section>

</body>
</html>
