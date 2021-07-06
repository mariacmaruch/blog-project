<?php

include("conexao.php");


if (isset($_POST['save'])) {
    $autor = $_POST['autor'];
    $titulo = $_POST['titulo'];
    $post = $_POST['post'];


    $sql = "INSERT INTO posts (titulo, data_publicacao, autor, post) VALUES ('$titulo', DATE(NOW()),'$autor','$post')";

    mysqli_query($conexao, $sql);

    header('Location: posts.php');
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "delete FROM posts WHERE id=$id";
    mysqli_query($conexao, $sql);

    header('Location: posts.php');
}
