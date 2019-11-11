<?php

setcookie('birtday','', time() + 3600);

// echo $_COOKIE['login'];

$birtday_big = $_POST['bd'];

print_r ($birtday_big);

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST">
		Введите ваш день рождения в формате дд.мм.гг<br><br>
		<input type="text" name="bd" placeholder="Введите ваш день рождения"><br><br>
		<button>Отправить</button>
	</form>
</body>
</html>