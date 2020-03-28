<?php

$requestBody = file_get_contents('php://input');
$json = json_decode($requestBody);

$reptoken = $json->events[0]->replyToken;
$groupid = $json->events[0]->source->groupId;
$userid = $json->events[0]->source->userId;
file_get_contents('http://ristie.ub.ac.id/weeb/auth/reptoken.php?token='.$reptoken.'&groupid='.$groupid.'&userid='.$userid);
$msgtype = $json->events[0]->message->type;

if ($msgtype == 'text')
{
	$url = 'https://api.dialogflow.com/v1/query?v=20170712';
	$data->lang = 'en';
	$data->sessionId = getToken(34);
	$data->query = $json->events[0]->message->text;
	$data->timezone = 'Asia/Jakarta';
	$data = json_encode($data);
	echo 'Forward ke dialogflow';
}
else
{
	$url = 'http://ristie.ub.ac.id/weeb/index.php';
	$data = $requestBody;
	echo 'Forward ke Ristie';
}

$file = fopen($_SERVER['DOCUMENT_ROOT'].'/lastreq.json', "w");
fwrite($file, $requestBody);
fclose($file);


echo $data."\n";
switcher($url, $data);


function switcher($url, $data)
{
$ch = curl_init($url);
curl_setopt_array($ch, array(
    CURLOPT_POST => TRUE,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer 380615438f074e6ba5d48a8c728a5edf' ,
        'Content-Type: application/json'
    ),
    CURLOPT_POSTFIELDS => $data
));

// Kirim
$response = curl_exec($ch);
}

function crypto_rand_secure($min, $max)
{
    $range = $max - $min;
    if ($range < 1) return $min; 
    $log = ceil(log($range, 2));
    $bytes = (int) ($log / 8) + 1; 
    $bits = (int) $log + 1; 
    $filter = (int) (1 << $bits) - 1; 
    do {
        $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
        $rnd = $rnd & $filter; 
    } while ($rnd > $range);
    return $min + $rnd;
}

function getToken($length)
{
    $token = "";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
    $codeAlphabet.= "0123456789";
    $max = strlen($codeAlphabet);

    for ($i=0; $i < $length; $i++) {
        $token .= $codeAlphabet[crypto_rand_secure(0, $max-1)];
    }

    return $token;
}
?>