<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/filehandler.php');

$method = $_SERVER['REQUEST_METHOD'];

if($method == 'GET')
{
	$token = $_GET["token"];
	$userid =$_GET["userid"];
	$groupid = $_GET["groupid"];
	
	lastreptoken($token);
	writefile('userid',$userid);
	writefile('groupid',$groupid);

	echo $token.' '.$userid.' '.$groupid;
}

?>