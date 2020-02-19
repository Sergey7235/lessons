<?php 
session_start();
require_once '../config/db.php';
require_once '../func/defense.php';
require_once '../getMethods/getUsers.php';

if(!defense()) {
	header("Location: temp_login.php");
}




$user_id = $_SESSION['user_id'];
$users = getUsers($user_id, $pdo); 

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="../func/exit.php">Выход</a>
	<a href="../templates/temp_users.php">Все пользователи</a>
	<ul>
	<?php foreach ($users as $user): ?>
		<h3><?= $user['name']; ?></h3>
		<li><?= $user['login']; ?></li>
		
	<?php endforeach ?>
	</ul>

<br><br>
	
</body>
</html>