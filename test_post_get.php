<?php

// echo"<pre>";
// print_r($_POST['age']);
// echo "</pre>";

// if ($_POST['age'] < 18) {
// 	echo "молодой";
// }
// else{
// 	echo 'не молодой';
// }




function test()
{

$summ = 0;

if ($_POST["name"]) {
	echo "Привет ".$_POST["name"]."!";
}
else echo "Привет, Null!";


if ($_POST["var_1"] == "4") {
	$summ++;
}
if ($_POST["method_1"]) {
	$summ++;
}
if ($_POST["method_2"]) {
	$summ++;
}

if ($summ==3) {
	echo "<br>".$_POST['name'].", вы ответили верно на все вопросы!<br>";
}

echo "<br>Количество верных ответов: ".$summ.".";
echo "<br>Процент верных ответов: " . floor($procent=($summ/3)*100)."%.";


if ((floor($procent) > 80) && (floor($procent) < 100)) {
	echo "<br>Ваша оценка - 5";}

elseif ((floor($procent) > 50) && (floor($procent) < 80)) {
	echo "<br>Ваша оценка - 4";
} 
elseif ((floor($procent) < 50) && (floor($procent) > 20)) {
	echo "<br>Ваша оценка - 3";
}
elseif ((floor($procent) < 20) && (floor($procent) >0)) {
	echo "<br>Ваша оценка - 2";
}
elseif (floor($procent) == 100) {
	echo "<br>Бинго! Вы правильно ответили на все вопросы!";
}

}


echo test();


echo"<pre>";
print_r($_POST);
echo "</pre>";





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
<!-- <div align="center"> -->
<form action="" method="post">
	<h2>Тест</h2>
	<div>Имя: <input type="text" name="name"></div><br>
	<div>Возраст:<input type="number" name="age"></div><br>
	<div>Дата рождения:<input type="date" name="birthday"></div><br>
<br>
	<div>
	Ваш пол: <br><br>
	<div>Женский<input type="radio" name="male" value="Женский"></div><br>
	<div>Мужской<input type="radio" name="male" value="Мужской"></div><br>
	</div>
<br><br><h3>Выберите правильные варианты ответов: </h3><br><br>
<br>
	<b>Вопрос №1</b><br><br>
		2*2= <br><br>
		<div>4<input type="radio" name="var_1" value="4"></div><br>
		<div>6<input type="radio" name="var_1" value="6"></div><br>
		<div>8<input type="radio" name="var_1" value="8"></div><br><br><br>

<b>Вопрос №2</b>
		Каким методом можно отправить данные формы (выберите все возможные варианты): <br><br>
		<div>Методом "GET"<input type="checkbox" name="method_1" value="get"></div><br>
		<div>Методом "POST"<input type="checkbox" name="method_2" value="post"></div><br>
		<div>Звуковой волной<input type="checkbox" name="method_3" value="sound"></div><br>

<b>Вопрос №3</b>
		 <br><br>
		

<br><br>
	<div>Я согласен<input type="checkbox" name=""></div><br>
	<!-- <div><input type="submit" name=""></div> -->
	

	













	<div><textarea name="message" id="" cols="" rows="" > </textarea></div><br>
	<button>Регистрация</button>
</form>

<!--  </div> -->

</body>
</html>