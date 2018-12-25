<?php

session_start();

include_once('../includes/connection.php');
include_once('../includes/article.php');

if (isset($_SESSION['zalogowany'])) {
    $title = $_POST['title'];
    $query = $pdo->prepare('DELETE FROM articles WHERE article_title = ?');
    $query->bindValue(1, $title);
    $query->execute();
    header('Location: menu.php');
  }

$articles = $article->fetch_all();
?>
