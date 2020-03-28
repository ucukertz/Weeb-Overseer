<?php

function userinfo()
{
$id = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/weeb/files/userid');	
	
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Authorization: Bearer /sET5w8EHmFOxgopjdjEnUoJumSlYIMuFNLd1Cjn8UxtUCuzS4Dxm9GtVOlGBWn3mCO+NcveASge0aAGsKc7UBQNCGirqEAy48cG+AmDuI0yH+fJ/gUF+wNEdH0CqK3gMoDHOHtUouLsmrP9HvmgYgdB04t89/1O/w1cDnyilFU=\r\n" .
              "User-agent: APACHE-MOFO\r\n"
  )
);

$context = stream_context_create($opts);

$info = file_get_contents('https://api.line.me/v2/bot/profile/'.$id, false, $context);
return json_decode($info);
}

function username()
{
return userinfo()->displayName;
}

echo json_encode(userinfo());
echo username();

?>