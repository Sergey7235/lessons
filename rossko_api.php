<?php 


// $aHTTP['http']['header'] =  "User-Agent: PHP-SOAP/5.5.11\r\n";

// $aHTTP['http']['header'].= "username: nikolayporohin@gmail.com\r\n"."password: XXXXX\r\n";

// $context = stream_context_create($aHTTP);





// $connect = array(
//     'wsdl'    => 'http://api.rossko.ru/service/GetSearch',
//     'options' => array(
//         'connection_timeout' => 1,
//         'trace' => true
//     )
// );

// $param = array(
//     'KEY1' => 'bb863005b6468e8ceffec6febeee4c84',
//     'KEY2' => '614ef5b7b2bca40dd231c4dc2c79283d',
//     'TEXT' => '333114'
// );

// $query  = new SoapClient($connect['wsdl'], $connect['options']);
// $result = $query->GetSearch($param);

// print_r($result);






// $connect = array(
//     'wsdl'    => 'http://api.rossko.ru/service/GetCheckoutDetails',
//     'options' => array(
//         'connection_timeout' => 1,
//         'trace' => true
//     )
// );

// $param = array(
//     'KEY1' => 'bb863005b6468e8ceffec6febeee4c84',
//     'KEY2' => '614ef5b7b2bca40dd231c4dc2c79283d'
// );

// $query  = new SoapClient($connect['wsdl'], $connect['options']);
// $result = $query->GetCheckoutDetails($param);

// print_r($result);





$connect = array(
    'wsdl'    => 'http://api.rossko.ru/service/GetOrders',
    'options' => array(
        'connection_timeout' => 1,
        'trace' => true
    )
);

$param = array(
    'KEY1' => 'bb863005b6468e8ceffec6febeee4c84',
    'KEY2' => '614ef5b7b2bca40dd231c4dc2c79283d',
    'ORDER_IDS' => array(
         array(
            'id' => 1234567
        ),
         array(
            'id' => 1234568
        )
    )
);

$query  = new SoapClient($connect['wsdl'], $connect['options']);
$result = $query->GetOrders($param);

print_r($result);








?>



