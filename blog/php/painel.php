<?php
include('verifica_login.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blog</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,800" rel="stylesheet">

    <script src="https://kit.fontawesome.com/2adeb80a3e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/painel.css">

</head>

<body>

    <div class="header">
        <h1> Blog </h1>

        <nav>
            <ul class="menu">
                <li class="logged"><a href="posts.php">Home</a></li>
                <li class="logged"><a href="sobre.php">Sobre</a></li>
                <li class="dropdown logged-in"><a href="#" class="dropbtn">Olá, <?php echo $_SESSION['nome']; ?> </a>
                    <div class="dropdown-content">
                        <a href="./painel.php">Publicar</a>
                        <a href="logout.php" id="logout">Sair</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>

    <?php require_once 'publicar.php'; ?>


    <div class="posts-content d-flex align-items-center">
        <h2> ESCREVA SEU POST </h2>
        <form class="form-posts" method="POST" action="publicar.php">

            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" placeholder="Escreva o título da publicação..."><br><br>

            <label for="nome">Autor(a):</label>
            <input type="text" id="nome" name="autor" placeholder="Escreva seu nome..."><br><br>

            <label for="story">Post:</label>
            <textarea id="story" name="post" rows="11" cols="120" placeholder="Escreva o que deseja publicar aqui..."></textarea>

            <button type="submit" class="btn-postar" name="save">PUBLICAR</button>
        </form>

    </div>

    <footer class="rodape">
        <p>© Copyright 2021 | Blog </p>
    </footer>

</body>

</html>