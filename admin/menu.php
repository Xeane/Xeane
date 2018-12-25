<?php

	session_start();

	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
?>
<!DOCTYPE html>
	<html lang="pl">
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="../css/menu.css">
		<title>Menu</title>
	</head>

	<body>
		<div class="container">
	  	<h1><a href="../index.php" id="logo" >Wróć na stronę główną</a></h1>
	    <a href="add.php">Dodaj nowy przepis</a><br>
	    <a href="delete.php">Usuń stary przepis</a><br>
	    <a href="logout.php">Wyloguj się</a>
		</div>
	</body>
	</html>
