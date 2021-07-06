<?php
session_start();
include('conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blog </title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,800" rel="stylesheet">

    <script src="https://kit.fontawesome.com/2adeb80a3e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/posts.css">

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

        <div class="titulo-home"> 
            <h1>TODOS OS POSTS</h1>
        </div>


        <?php
        $query = "select * from posts";
        $result = mysqli_query($conexao, $query);
        ?>

        <div class="post-section">
            <div class="post-completo">

                <?php
                while ($row = $result->fetch_assoc()) : ?>

                    <h2 class="post-titulo"><?php echo $row['titulo']; ?></h2>
                    <p class="post-text"><?php echo $row['post']; ?></p>
                    <p class="post-infos"><strong>Autor(a): </strong><?php echo $row['autor']; ?></p>
                    <p class="post-infos"><strong>Data: </strong><?php echo $row['data_publicacao']; ?></p>

                    <?php
                    if (isset($_SESSION['nome'])) :
                    ?>
                        <a href="publicar.php?delete=<?php echo $row['id']; ?>" class="btn-deletar">Deletar</a>
                    <?php
                    endif;
                    ?>

                    <hr class="post-separator">
                <?php endwhile; ?>
            </div>
        </div>


</body>

</html>