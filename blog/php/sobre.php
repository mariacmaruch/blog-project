<?php
//include('verifica_login.php');
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
    <link rel="stylesheet" href="../css/sobre.css">
</head>

<body>

    <div class="header">
        <h1> Blog </h1>

        <nav>
            <ul class="menu">
                <li class="logged"><a href="posts.php">Home</a></li>
                <li class="logged"><a href="sobre.php">Sobre</a></li>

                <?php
                if (!isset($_SESSION['nome'])) :
                ?>
                    <li class="dropdown logged-in"><a href="./login.php" class="dropbtn">Login</a></li>
                <?php
                endif;
                ?>

                <?php
                if (isset($_SESSION['nome'])) :
                ?>
                    <li class="dropdown logged-in"><a href="#" class="dropbtn">Olá, <?php echo $_SESSION['nome']; ?> </a>
                        <div class="dropdown-content">
                            <a href="./painel.php">Publicar</a>
                            <a href="logout.php" id="logout">Sair</a>
                        </div>
                    </li>
                <?php
                endif;
                ?>

            </ul>

        </nav>
    </div>

    <div class="sobre-content d-flex align-items-center">
        <h2> SOBRE O BLOG </h2>
        <p> Blog colaborativo feito pela Maria Clara Maruch. Se sintam confortavéis para se cadastrarem e publicarem
            o que desejam =) <br>
            Se divirtam!
        </p>

    </div>
    
    <footer class="rodape">
        <p>© Copyright 2021 | Blog </p>
    </footer>
</body>


</html>