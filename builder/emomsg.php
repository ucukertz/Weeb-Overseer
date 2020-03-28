<?php

function emomsg ($key, $unicode)
{
	$data = new \stdClass();
	$data->replyToken = $key;
	$messages = array
	(
	    	array
		(
	    	"type" => "text", 
	    	"text" => "u\.$unicode"
		)
	);
	$data->messages=$messages;
	
	return $data;
}

?>