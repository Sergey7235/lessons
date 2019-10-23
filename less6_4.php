<?php  
// $string = 'sdf sdfs sdfsdf   oljkkt';

// $arr = explode(" ", $string); //Строку в массив
// $newStr = implode(' ', $arr);  //Массив в строку


$price = $_POST["number"] * 400;

if ($_POST["country"] == 2) {
	$price = $price + ((($price)*10)/100);

}

elseif ($_POST["country"] == 3) {
	$price = $price + ((($price)*12)/100);

}


if ($_POST["discount"]) {
	$price = $price - ((($price)*5)/100);

}


echo "Стоимость тура составит: ". $price."р.<br><br>";

?>







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	</title>
</head>
<body>
	


<form action="" method="post">
	 <select name="country">
		<option value="1">Turkey</option>
		<option value="2">Egypt</option>
		<option value="3">Italy</option>
		
	</select><br><br>


	<div>Введите количество дней отдыха: <input type="text" name="number"></div><br>
	<div>У меня есть скидка - <input type="checkbox" name="discount" value="get"></div><br>
			<button>Go</button>
</form>




</body>
</html>