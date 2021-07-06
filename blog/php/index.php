<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blog</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,800" rel="stylesheet">

    <script src="https://kit.fontawesome.com/2adeb80a3e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="header">
        <h1> Blog </h1>

        <nav>
            <ul class="menu">
                <li class="logged"><a href="posts.php">Home</a></li>
                <li class="logged"><a href="sobre.php">Sobre</a></li>
                <li class="logged-out"><a href="index.php">Login</a></li>

                </li>
            </ul>

        </nav>

    </div>

    <div class="login-content d-flex align-items-center">
        <form class="form-login" method="POST" action="login.php">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="usuario"><br><br>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha"><br><br>
            <button class="btn-entrar">ENTRAR</button>
        </form>

        <?php
        if (isset($_SESSION['nao_autenticado'])) :
        ?>
            <span>Usuário ou senha inválidos.</span>
        <?php
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>

        <p class="login-cadastrar"><a href="./cadastro.php"> Não é usuário? Cadastre! </a></p>

    </div>

    <footer class="rodape">
        <p>© Copyright 2021 | Blog </p>
    </footer>

    

</body>

</html>