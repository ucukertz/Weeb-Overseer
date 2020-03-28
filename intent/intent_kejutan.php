<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/builder/picmsg.php');

function intent_kejutan($token, $extra)
{
   $url="https://ucukertz.000webhostapp.com/pics/decoy.png";
    
	$data=picmsg($token, $extra, $url);
    return $data;
}

?>