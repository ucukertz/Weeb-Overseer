<?php

function txtpicmsg ($key, $img_url, $text)
{
	$data = new \stdClass();
	$data->replyToken = $key;
	$messages = array
	(
	    array
		(
	    	"type" => "image", 
	    	"originalContentUrl" => $img_url, 
	    	"previewImageUrl" => $img_url
		),
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