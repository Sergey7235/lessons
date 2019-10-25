	<?php


	$radius_1 = $_POST["radius"];

	$x_pos_1 = rand(0, 500);
	$y_pos_1 = rand(0, 500);


	$x_pos_2 = rand(0, 500);
	$y_pos_2 = rand(0, 500);


	$x_pos_3 = rand(0, 500);
	$y_pos_3 = rand(0, 500);



	?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

<style type="text/css">

	*{margin: 0;
		padding: 0;
	}


	.d1 {
	position: absolute;
	left: <?= $x_pos_1."px"?>;
	top: <?= $y_pos_1."px"?>;	
	width: <?= $_POST["radius"]."px"?>; 
	height: <?= $_POST["radius"]."px"?>;
	background: <? echo $_POST["color"] ?>;
	border-radius: 50%;
	}

	.d2 {
	position: absolute;
	left: <?= $x_pos_2."px"?>;
	top: <?= $y_pos_2."px"?>;	
	width: <?= $_POST["radius"]."px"?>;
	height: <?= $_POST["radius"]."px"?>;
	background: <?php echo $_POST["color"] ?>;
	border-radius: 50%;
	}

	.d3 {
	position: absolute;
	left: <?= $x_pos_3."px"?>;
	top: <?= $y_pos_3."px"?>;	
	width: <?= $_POST["radius"]."px"?>; 
	height: <?= $_POST["radius"]."px"?>;
	background: <?php echo $_POST["color"] ?>;
	border-radius: 50%;
	}


	
</style>







<form action="" method="post">
	
<br><br>
<div>Введите цвет и размер трёх кругов <br><br>
	цвет: <input type="text" name="color"></div><br>
	радиус: <input type="text" name="radius"></div><br><br>

</div>

<button>Go!</button>


<div class="d1"></div>
<div class="d2"></div>
<div class="d3"></div>



</form>
	
</body>
</html>