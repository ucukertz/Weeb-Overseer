<?php 
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/intent/intenthandler.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/filehandler.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/builder/linereply.php');

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'POST')
{
	$requestBody = file_get_contents('php://input');
	$json = json_decode($requestBody);
	if ($json->originalRequest->data->replyToken == NULL)
	$token = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/weeb/files/last_rep_token.txt');
	else
	{
	$token = $json->originalRequest->data->replyToken;
	writefile('userid',$json->originalRequest->data->source->userId);
	writefile('groupid',$json->originalRequest->data->source->groupId);
	}
	
	lastreq($requestBody);

	intent_handle($json, $token);
    file_get_contents('http://ristie.ub.ac.id/weeb/misc/title_pick.php');
}
else
{
	$url = "home.html";
	ob_start();
    	header('Location: '.$url);
    	ob_end_flush();
    	die();
}

?>