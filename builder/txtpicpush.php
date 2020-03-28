<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/builder/linepush.php');

function txtpicpush ($id, $img_url, $text)
{
	$data = new \stdClass();
	$data->to = $id;
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
	
	linepush($data);
}
?>