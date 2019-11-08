<?php
session_start();
//$_SESSION['num'] = '1';

//echo $_SESSION['num'];

if ($_SESSION['num'] == 0) {
	echo 'Вы ещё не обновляли страницу';
	$_SESSION['num'] = $_SESSION['num'] + 1;
}
else {

	echo $_SESSION['num'] + 1;
	$_SESSION['num'] = $_SESSION['num'] + 1;
}


//print_r($_SESSION);



?>