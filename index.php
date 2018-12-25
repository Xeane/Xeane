<?php

  include_once('includes/connection.php');
  include_once('includes/article.php');

  $article = new Article;
  $articles = $article->fetch_all();
 ?>

<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
    <div id="box">
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="przepisy.php">Przepisy</a></li>
          <li><a href="admin/zaloguj.php">Zaloguj</a></li>
        </ul>
      </nav>
      <header>
        <h1>A może tak zacząć gotować samemu?</h1>
      </header>
      <article class="tryon">
        <h2>Łatwe proste i smaczne przepisy dla każdego</h2>
        <p>Znajdziesz tu łatwe przepisy, które pozwolą Ci przygotować pyszne potrawy, dania.</p>
      </article>
    </div>
  </body>
</html>
