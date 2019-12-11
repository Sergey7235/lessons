<?php

echo"<pre>";
print_r($_POST['age']);
echo "</pre>";

if ($_POST['age'] < 18) {
	echo "молодой";
}
else{
	echo 'не молодой';
}


?>













<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

<!-- 
action - то куда отправляются данные 
method get - отправляет данные через адресную строку
	   post  - скрытно


-->

<form action="" method="post">
	<div><input type="text" name="name"></div>
	<div><input type="number" name="age"></div>
	<div><input type="date" name="birthday"></div>
	<div>Женский<input type="radio" name="male" value="Женский"></div>
	<div>Мужской<input type="radio" name="male" value="Мужской"></div>
	<div>Я согласен<input type="checkbox" name=""></div>
	<!-- <div><input type="submit" name=""></div> -->
	

	<div><textarea name="message" id="" cols="" rows="" > </textarea></div>
	<button>Регистрация</button>
</form>



</body>
</html>