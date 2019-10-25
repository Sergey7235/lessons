	<?php


	$color = rand(0 , 7);
	$color_obj = rand(0 , 7);
	$color_obj_border = rand(0 , 7);
	$arr = ["red", "green", "black", "yellow", "blue", "white", "magenta"];
	$x_pos = $_POST["x"];
	$y_pos = $_POST["y"];
	$length = $_POST["l"];




	?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

<style type="text/css">
	body {
    background: <?= $arr[$color] ?>; 
}
	

	*{margin: 0;
		padding: 0;
	}

	.cont{
		position: absolute;
		left: <?= $x_pos."px"?>;
		top: <?= $y_pos."px"?>;
		background: <?= $arr[$color_obj] ?>;
		width: <?= $length."px"?>;
		height: <?= $length."px"?>;
		border-color: <?= $arr[$color_obj_border] ?>
	}

</style>







<form action="" method="post">
	
<br><br>
<div>Введите координаты X и Y левой верхней вершины квадрата в пикселях: <br><br>
	X: <input type="text" name="x"></div><br>
	Y: <input type="text" name="y"></div><br><br>
<div>Введите сторону квадрата в пикселях: <br><br>
	L: <input type="text" name="l"></div><br>



 <div class="cont">

</div>

<button>Go!</button>

</form>
	
</body>
</html>