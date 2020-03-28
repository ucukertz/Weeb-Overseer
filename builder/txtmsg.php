<?php

function txtmsg ($key, $text)
{
	$data = new \stdClass();
	$data->replyToken = $key;
	$messages = array
	(
	    	array
		(
	    	"type" => "text", 
	    	"text" => $text
		)
	);
	$data->messages=$messages;
	
	return $data;
}
?>