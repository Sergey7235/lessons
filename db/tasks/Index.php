<?php

require_once 'db.php';


//print_r($_POST['login']);

$stmt = $pdo->query("INSERT INTO users_data_base(name, login, password) VALUES('$_POST['name']', '$_POST['login']', '$_POST['password']')");

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<br><br>
	<form action="" method="POST">
		<input type="text" name="name" placeholder="name"> <br><br>
		<input type="text" name="login" placeholder="login"> <br><br>
		<input type="text" name="password" placeholder="password"> <br><br>
		<button>Send</button>
	</form>
</body>
</html>