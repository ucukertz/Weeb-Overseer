<?php

function picmsg ($key, $ori_url, $prv_url)
{
	$data = new \stdClass();
	$data->replyToken = $key;
	$messages = array
	(
	    	array
		(
	    	"type" => "image", 
	    	"originalContentUrl" => $ori_url, 
	    	"previewImageUrl" => $prv_url
		)
	);
	$data->messages=$messages;
	
	return $data;
}

?>