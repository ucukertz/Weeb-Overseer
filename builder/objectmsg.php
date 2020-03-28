<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/builder/linepush.php');
	
function objectmsg($key, $object)
{
	$data = new \stdClass();
	$data->replyToken = $key;
	
	$msgobject = json_decode($object);
	
	$messages = array($msgobject);
	$data->messages=$messages;
	
	return $data;
}

?>