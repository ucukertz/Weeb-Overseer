<?php

function linepush($data)
{
$token = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/weeb/auth/accesstoken.txt');
	
$ch = curl_init('https://api.line.me/v2/bot/message/push');
curl_setopt_array($ch, array(
    CURLOPT_POST => TRUE,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer '.$token ,
        'Content-Type: application/json'
    ),
    CURLOPT_POSTFIELDS => json_encode($data)
));

// Kirim
$response = curl_exec($ch);
}

?>