<?php

try {
$pdo = new PDO('mysql:host=localhost;dbname=xeane_xeane', 'root', '');
}
catch (PDOException $e) {
    exit('Database error.');
  }

 ?>
