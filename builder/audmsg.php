<?php

function audmsg ($key, $ori_url, $duration = 10000)
{
	$data = new \stdClass();
	$data->replyToken = $key;
	$messages = array
	(
	    	array
		(
	    	"type" => "audio", 
	    	"originalContentUrl" => $ori_url, 
	    	"duration" => $duration
		)
	);
	$data->messages=$messages;
	
	return $data;
}

?>