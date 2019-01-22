<?php


$pers = [
    'firstName'=>'Groot',
    'lastName'=> 'I am',
    'gender' => 'Other'
];
$json = json_encode($pers);

$options = [
    'http'=>[
        'method'=> 'POST',
        'header'=> 'Content-Type : application/json',
        'content'=> $json
    ]
];
$context = stream_context_create($options);
file_get_contents('http://localhost:8888/web_service/personne_service.php',false,$context);