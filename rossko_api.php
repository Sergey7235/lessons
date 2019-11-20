<?php 


$aHTTP['http']['header'] =  "User-Agent: PHP-SOAP/5.5.11\r\n";

$aHTTP['http']['header'].= "username: sergey.yushkov@rossko.ru\r\n"."password: XXXXX\r\n";

$context = stream_context_create($aHTTP);





$connect = array(
    'wsdl'    => 'http://api.rossko.ru/service/GetSearch',
    'options' => array(
        'connection_timeout' => 1,
        'trace' => true
    )
);

$param = array(
    'KEY1' => '27790',
    'KEY2' => '27790',
    'TEXT' => '333114'
);

$query  = new SoapClient($connect['wsdl'], $connect['options']);
$result = $query->GetSearch($param);

print_r($result);


?>



