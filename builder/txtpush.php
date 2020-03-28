<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/builder/linepush.php');

function txtpush ($id, $text)
{
	$data = new \stdClass();
	$data->to = $id;
	$messages = array
	(
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