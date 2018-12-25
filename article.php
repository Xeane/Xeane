<?php

include_once('includes/connection.php');
include_once('includes/article.php');

$article = new Article;

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $data = $article->fetch_data($id);

  ?>
  <!DOCTYPE html>
  <html lang="pl">
    <head>
      <meta charset="utf-8">
      <title>Przepisy</title>
      <link rel="stylesheet" href="css/przepis.css">
    </head>
    <body>
      <div id="box">
        <nav>
          <h1><a href="index.php" id="logo" >Wróć na stronę główną</a></h1>
        </nav>
        <article class="tryon">
          <h3><?php echo $data['article_title']; ?></h3>
          <p><?php echo $data['article_content']; ?></p>
        </article>
      </div>
    </body>
  </html>
  <?php
} else {
  header('Location: index.php');
  exit();
}

 ?>
