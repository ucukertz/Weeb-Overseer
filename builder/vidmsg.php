<?php

function vidmsg ($key, $ori_url, $prv_url)
{
	$data = new \stdClass();
	$data->replyToken = $key;
	$messages = array
	(
	    	array
		(
	    	"type" => "video", 
	    	"originalContentUrl" => $ori_url, 
	    	"previewImageUrl" => $prv_url
		)
	);
	$data->messages=$messages;
	
	return $data;
}

?>