<?php 

function getUsers($user_id, $pdo)
{
	$query = $pdo->query("SELECT * FROM users ");
	$users = $query->fetchAll();
	return $users;
}

 ?>