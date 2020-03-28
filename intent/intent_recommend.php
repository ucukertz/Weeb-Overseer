<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/builder/txtmsg.php');

function intent_recommend($token)
{
        $text = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/weeb/files/title.txt');
    
	$data=txtmsg($token, $text);
    	return $data;
}

?>