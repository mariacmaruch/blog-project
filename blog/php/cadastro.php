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
    <link rel="stylesheet" href="../css/cadastro.css"> 
</head>

<body>

    <div class="header">
        <h1> Blog </h1>

        <nav>
            <ul class="menu">
                <li class="logged"><a href="posts.php">Home</a></li>
                <li class="logged"><a href="sobre.php">Sobre</a></li>
                <li class="logged-out"><a href="index.php">Login</a></li>
            </ul>

        </nav>

    </div>

    <div class="cadastro-content d-flex align-items-center">
        <h2> FAÇA SEU CADASTRO</h2>
        <form class="form-cadastro" method="POST" action="cadastrar.php">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br><br>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="usuario" required><br><br>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$" title="Pelo menos 6 caracteres entre letras e números"><br><br>
            <button class="btn-cadastrar">CADASTRAR</button>
        </form>

        <?php
        if (isset($_SESSION['status_cadastro'])) :
        ?>
            <span>Cadastro realizado com sucesso!</span>
        <?php
        endif;
        unset($_SESSION['status_cadastro']);
        ?>

        <?php
        if (isset($_SESSION['usuario_existe'])) :
        ?>
            <span>E-mail já existe. Informe outro e tente novamente. </span>
        <?php
        endif;
        unset($_SESSION['usuario_existe']);
        ?>
    </div>
    
    <footer class="rodape">
        <p>© Copyright 2021 | Blog </p>
    </footer>

</body>


</html>