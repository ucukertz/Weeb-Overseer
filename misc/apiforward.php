<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/builder/txtmsg.php');

function apiforward($token, $text)
{
	$data = txtmsg($token, $text);
	return $data;
}

?>