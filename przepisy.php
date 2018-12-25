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
    <title>Przepisy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/przepisy.css">
  </head>
  <body>
    <div id="box">
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="Przepisy.php">Przepisy</a></li>
          <li><a href="admin/zaloguj.php">Zaloguj</a></li>
        </ul>
      </nav>
      <article class="tryon">
        <?php foreach ($articles as $article) { ?>
          <a href="article.php?id=<?php echo $article['article_id']; ?>"><?php echo $article['article_title']; ?></a><br><br>
        <?php } ?>
      </article>
    </div>
  </body>
</html>
