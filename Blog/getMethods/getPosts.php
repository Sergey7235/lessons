<?php
function getPosts($user_id, $pdo)
{
	$query = $pdo->query("SELECT * FROM users WHERE user_id = '$user_id'");
	$posts = $query->fetchAll();
	return $posts;
}
 ?>