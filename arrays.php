<?php

//Сумма элементов массива


// $arr = [];
// $sum = 0;

// for ($i=0; $i < 10; $i++) { 
// 	array_push($arr, rand(0,100));
	
// }

// foreach ($arr as $i) {
// 	$sum = $sum + $i;
// }

// echo $sum;

// echo "<pre>";
// var_dump($arr);
// echo "</pre>";




//Среднее арифметическое элементов массива

//  $arr = [];
// $sum = 0;

// for ($i=0; $i < 10; $i++) { 
// 	array_push($arr, rand(0,100));
// }

// foreach ($arr as $i) {
// 	$sum = ($sum + $i);
// }

// echo $sum/count($arr);

// echo "<pre>";
// var_dump($arr);
// echo "</pre>";




//Сумма четных/нечетных элементов массива

// $arr = [];
// $sum = 0;

// for ($i=0; $i < 10; $i++) { 
// 	array_push($arr, rand(0,100));
	
// }

// foreach ($arr as $i) {
// 	if ($i % 2 == 0)  {
// 	 	$sum_2 = $sum_2 + $i;
// 	 } 
// 	 else

// 	$sum_1 = $sum_1 + $i;
// }

// echo "<pre>";
// echo $sum_1;
// echo "</pre>";
// echo "<pre>";
// echo $sum_2;
// echo "</pre>";



// echo "<pre>";
// var_dump($arr);
// echo "</pre>";





//Самое часто встречающееся число в массиве



// $arr = [];
// $sum = 0;
// $temp = 1;
// $arr_1 = [];

// for ($i=0; $i < 10; $i++) { 
// 	array_push($arr, rand(0,5));
	
// }

// foreach ($arr as $i) {
// 	foreach ($arr as $j) {
// 	  	if ($i==$j) {
// 	  		$temp = $temp + 1;
// 	  	}
// 	  	$arr_1[$i][$j];
// 	  }  
// 	}









// //echo $sum;
// echo $temp;

// echo "<pre>";
// var_dump($arr);
// echo "</pre>";

// echo "</Br>";

// echo "<pre>";
// var_dump($arr_1);
// echo "</pre>";








//Элементы массива, которые меньше среднего арифметического


// $arr = [];
// $sum = 0;

// for ($i=0; $i < 10; $i++) { 
// 	array_push($arr, rand(0,100));
// }

// foreach ($arr as $i) {
// 	$sum = ($sum + $i);
// }

// $sred_arif = $sum / count($arr);

// echo $sred_arif . "<br>";


// foreach ($arr as $i) {
// 	if ($sred_arif > $i) {
// 		echo $i . ',';
// 	}
// }




// echo "<pre>";
// print_r($arr);
// echo "</pre>";









//Заменить все отрицательные элементы массива на 0


// $arr = [];
// $sum = 0;

// for ($i=0; $i < 10; $i++) { 
// 	array_push($arr, rand(-50,50));
	
// }


// for ($i=0; $i < count($arr) ; $i++ ) { 
// 	if ($arr[$i] < 0) {
// 		$arr[$i] = 0;
// 	}
// }



// echo "<pre>";
// print_r($arr);
// echo "</pre>";






//Найти максимальное/минимальное числа в массиве и вычислить их сумму/поменять местами


$arr = [];
$sum = 0;
$max = 0;
$min = 1000;

for ($i=0; $i < 10; $i++) { 
	array_push($arr, rand(0,100));
	
}



foreach ($arr as $key_1 => $value) {
	if ($value > $max) {
		$max = $value;
	}
}

$min = $arr[0];
foreach ($arr as $key_2 => $value) {
	if ($value < $min) {
		$min = $value;
	}
}





echo $max. '<br>';
echo $min;





echo "<pre>";
print_r($arr);
echo "</pre>";





//Перевернуть массив




// $arr = [];
// $sum = 0;

// for ($i=0; $i < 10; $i++) { 
// 	array_push($arr, rand(0,100));
	
// }

// foreach ($arr as $i) {
// 	$sum = $sum + $i;
// }

// echo $sum;

// echo "<pre>";
// var_dump($arr);
// echo "</pre>";






















?>