<?php
// setcookie('num','1', time() + 3600);

if ($_COOKIE['num']) {
	
	$_COOKIE['num'] = $_COOKIE['num'] + 1;
	echo 'Вы посетили наш сайт'. $_COOKIE['num']. 'раз';
}

else
{
	setcookie('num','1', time() + 3600);
	echo 'Вы посетили наш сайт'. $_COOKIE['num']. 'раз </br>';
	print_r($_COOKIE['num']);
}



 // setcookie('num',null, time());






?>