<?php  
// $string = 'sdf sdfs sdfsdf   oljkkt';

// $arr = explode(" ", $string); //Строку в массив
// $newStr = implode(' ', $arr);  //Массив в строку


if (($_POST["name"])&&($_POST["pwd"])&&($_POST["mail"])) {
	echo "Спасибо, все данные введены!<br>";
	echo "Имя: ".$_POST["name"]."<br>"."Пароль: ".$_POST["pwd"]."<br>"."Электропочта: ".$_POST["mail"];
}

elseif (!$_POST["name"]) {
	echo "Введите Имя: ";
}
elseif (!$_POST["pwd"]) {
	echo "Введите пароль: ";
}
elseif (!$_POST["mail"]) {
	echo "Введите эл.почту: ";
}



echo "<br><br>";


?>







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	</title>
</head>
<body>
	


<form action="" method="post">
<!--	<select name="123">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		
	</select>
 -->


	<div>Введите ваше Имя:<input type="text" name="name"><br><br>
		 Введите ваш пароль:<input type="text" name="pwd"><br><br>
		 Введите ваш e-mail:<input type="text" name="mail"><br><br>
		</div><br>
			<button>Готово</button>
</form>




</body>
</html>