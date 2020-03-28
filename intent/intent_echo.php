<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/builder/txtmsg.php');

function intent_echo($token, $q)
{
	if (strpos($q, '(2)') !== false || strpos($q, '(3)') !== false || strpos($q, '(4)') !== false || strpos($q, '(5)') !== false ||strpos($q, '(6)') !== false)
	{
		return 0;
	}
    	else if (strlen($q)<=40)
	{
		$text = $q.' (2)';
		$data=txtmsg($token, $text);
   		return $data;
	}
	else
	{
		return 0;
	}	
}

function intent_echo_up($token, $q)
{
	if (strpos($q, '(6)') !== false)
	$text = str_replace("(6)","(7)", $q);
	if (strpos($q, '(5)') !== false)
	$text = str_replace("(5)","(6)", $q);
	if (strpos($q, '(4)') !== false)
	$text = str_replace("(4)","(5)", $q);
	if (strpos($q, '(3)') !== false)
	$text = str_replace("(3)","(4)", $q);
	if (strpos($q, '(2)') !== false)
	$text = str_replace("(2)","(3)", $q);

	$data=txtmsg($token, $text);
   	return $data;
}

?>