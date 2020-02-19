<?php

setcookie('birtday','', time() + 3600); 

// echo $_COOKIE['login'];

$birtday_big = $_POST['bd'];

print_r ($birtday_big);

$arr = explode(".", $birtday_big);

echo '<br><br>';

print_r($arr);

echo '<br><br>';


$birthday = new DateTime($birtday_big);
$today = new DateTime(date('Y-m-d'));
$interval = $birthday->diff($today);
echo $interval->format('%R%a дней');
echo "<br><br>";



$arr_day_in_month = [''];








echo "string";



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