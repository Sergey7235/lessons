<?php
require_once '../config/db.php'; 

$title = $_POST['title'];
$post_id = $_POST['post_id'];
$text = $_POST['text'];




function changePost($text, $title, $post_id, $pdo)
{

$query = $pdo->query("UPDATE posts SET title = '$title', text = '$text' WHERE id = $post_id" );
header("Location: ../templates/temp_home.php");

}

changePost($text, $title, $post_id, $pdo);



?>