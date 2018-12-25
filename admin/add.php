<?php

session_start();
include_once('../includes/connection.php');

if(isset($_SESSION['zalogowany'])) {
  if (isset($_POST['title'], $_POST['content'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    if (empty($title) or empty($content)) {
      $error = '<div id="alert">
      <span id="closebtn" onclick="clbtn()">&times;</span>
      <strong>Błąd!</strong> Wypełni wszystkie pola.</div>';
    } else {
      $query = $pdo->prepare('INSERT INTO articles(article_title, article_content) VALUES(?, ?)');

      $query->bindValue(1, $title);
      $query->bindValue(2, $content);

      $query->execute();
      header('Location: menu.php');
    }
  }
?>
<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="../css/menu.css">
      <script type="text/javascript" src="../js/ckeditor/ckeditor.js"></script>
      <title>Dodaj przepis</title>
    </head>
    <body>
      <script type="text/javascript">
        function clbtn() {
          document.getElementById("alert").style.display = "none";
        }
      </script>
      <div class="container1">
        <?php
        if (isset($error)) { ?> <?php echo $error; ?> <?php }
        ?>
        <h1><a href="../index.php" id="logo">Wróć na stronę główną</a></h1>
        <form action="add.php" method="post">
          <input type="text" name="title" placeholder="Tytuł"><br><br>
            <div class="box">
              <textarea name="content" id="content" rows="10" cols="80">
              </textarea>
              <script>
                CKEDITOR.replace( 'content' );
                </script>
            </div><br>
          <input type="submit" name="" value="Dodaj nowy przepis!">
        </form>
        <h3><a href="menu.php" id="logo" >Wróć do menu</a></h3>
      </div>
    </body>
  </html>
  <?php
} else {
  header('Location: index.php');
}

 ?>
