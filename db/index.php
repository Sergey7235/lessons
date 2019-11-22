<?php
// function debug($arr)
// {
// 	echo "<pre>";
// 	print_r($arr);
// 	echo "</pre>";
// }




require_once 'db.php';


//$stmt = $pdo->query("SELECT * FROM users_data_base WHERE id = 2 or id = 1");  //( *- значит - все поля)

$stmt = $pdo->query("INSERT INTO users_data_base(name, login, password) VALUES('tolya', 'tolik3321', 'tolyasik')");

//$stmt = $pdo->query("UPDATE users_data_base SET name = 'kolya' WHERE id = 1");

//$stmt = $pdo->query("DELETE FROM users_data_base WHERE id = 1");


//$user = $stmt->fetch();


//$user = $stmt->fetchAll();






debug($user);







?>