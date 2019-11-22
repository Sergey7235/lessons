<?php

require_once 'db.php';


//print_r($_POST['login']);

$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];


$name_auth = $_POST['name_auth'];
$login_auth = $_POST['login_auth'];
$password_auth = $_POST['password_auth'];

$stmt = $pdo->query("INSERT INTO users(name, login, password) VALUES('$name', '$login', '$password')");

$stmt = $pdo->query("SELECT * FROM users WHERE login = '{$_POST['login_auth']}' and password = '{$_POST['password_auth']}'");

$res = $stmt->fetch();







?>







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<br><br>
	<a>Регистрация</a>
	<br><br>
	<form action="" method="POST">
		<input type="text" name="name" placeholder="name"> <br><br>
		<input type="text" name="login" placeholder="login"> <br><br>
		<input type="text" name="password" placeholder="password"> <br><br>
		<button>Send</button>
	</form>
	<br><br>
	<hr>
	<br><br>
<a href="auth.php">Авторизация</a>

</body>
</html>