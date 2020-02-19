<?php 
session_start();
require_once '../config/db.php';
require_once '../func/defense.php';
require_once '../getMethods/getPosts.php';

if(!defense()) {
	header("Location: temp_login.php");
}

$user_id = $_SESSION['user_id'];
$posts = getPosts($user_id, $pdo);

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	 <link href="../css/style.css" rel="stylesheet">
</head>
<body>
	<a href="../func/exit.php">Выход</a>
	<a href="../templates/temp_users.php">Все пользователи</a>
	<ul>
	<?php foreach ($posts as $post): ?>
		<h3><?= $post['title']; ?></h3>
		<li><?= $post['text']; ?></li>
		<a href=<?= "../posts/{$post['id']}"; ?>>Ссылка</a>
	<?php endforeach ?>
	</ul>

<br><br>
	<form action="../setMethods/setPost.php" method="POST">
		<input type="text" name="title"><br><br>
		<textarea name="text" id="" cols="30" rows="10"></textarea><br><br>
		<button>Добавить пост</button>
	</form>
</body>
</html>