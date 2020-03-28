<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/builder/linepush.php');

function picpush ($id, $ori_url, $prv_url)
{
	$data = new \stdClass();
	$data->to = $id;
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
	
	linepush($data);
}

?>