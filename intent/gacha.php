<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/intent/intent_echo.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/intent/intent_peperesp.php');

function gacha($token, $q, $text)
{
    $roll = mt_rand(0, 10000);
	switch (true)
	{
	case $roll <= 500:
	$data = intent_echo($token, $q);
	break;
	
	case $roll <= 800:
	$data = intent_peperesp($token, $text);
	break;
	
	}

	if (strpos($q, '(2)') !== false || strpos($q, '(3)') !== false || strpos($q, '(4)') !== false || strpos($q, '(5)') !== false ||strpos($q, '(6)') !== false)
	{
	if (mt_rand(0, 100)>50)
	$data = intent_echo_up($token, $q);
	}
    
    	return $data;
}

?>