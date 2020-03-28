<?php

function writefile($filename, $content)
{
    $file = fopen($_SERVER['DOCUMENT_ROOT'].'/weeb/files/'.$filename, "w");
	fwrite($file, $content);
	fclose($file);
}

function lastreq($body)
{
    $file = fopen($_SERVER['DOCUMENT_ROOT'].'/weeb/files/lastreq.json', "w");
	fwrite($file, $body);
	fclose($file);
}

function lastrep($reply)
{
    $file = fopen($_SERVER['DOCUMENT_ROOT'].'/weeb/files/lastrep.json', "w");
	fwrite($file, $reply);
	fclose($file);
}

function write_title($title)
{
	$file = fopen($_SERVER['DOCUMENT_ROOT'].'/weeb/files/title.txt',"w");
	fwrite($file, $title);
	$fclose($file);
}

function lastreptoken($token)
{
		
    $file = fopen($_SERVER['DOCUMENT_ROOT'].'/weeb/files/last_rep_token.txt', "w");
	fwrite($file, $token);
	fclose($file);   
}
	