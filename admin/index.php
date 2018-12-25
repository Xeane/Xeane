<?php
	session_start();
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: menu.php');
		exit();
	}
?>
<!DOCTYPE HTML>
	<html lang="pl">
		<head>
			<meta charset="utf-8"/>
			<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
			<title></title>
			<link rel="stylesheet" href="../css/login.css" type="text/css" />
		</head>
		<body>
			<div id="container">
				<h1>Zaloguj się</h1>
				<form action="zaloguj.php" method="post">
					<input type="text" name="login" value="admin"><br>
					<input type="password" name="haslo"><br><br>
					<input type="submit" value="Kliknij mnie!">
				</form>
				<h1><a href="../index.php" id="logo" >Wróć na stronę główną</a></h1>
			</div>
		</body>
	</html>
