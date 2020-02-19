<?php
require_once '../config/db.php';

$url = $_SERVER['REQUEST_URI'];
$url = explode('/', $url);

$post_id = $url[count($url) - 1];

$query = $pdo->query("SELECT * FROM posts WHERE id = $post_id");
$post = $query->fetch();

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<form action="../changePost/change_post.php" method="POST">
	 	<input type="text" value="<?= $post['title']; ?>" name="title"><br><br>
	 	<input type="text" value="<?= $post_id; ?>" hidden='' name='post_id'>
	 	<textarea name="text" cols="30" rows="10" ><?= $post['text']; ?></textarea>
	 	<button>Изменить</button>
 	</form>
 </body>
 </html>