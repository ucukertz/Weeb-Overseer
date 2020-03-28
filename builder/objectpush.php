<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/builder/linepush.php');
	
function objectpush($id, $object)
{
	$data = new \stdClass();
	$data->to = $id;
	
	$msgobject = json_decode($object);
	
	$messages = array($msgobject);
	$data->messages=$messages;
	
	linepush($data);
}

?>