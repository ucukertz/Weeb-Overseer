<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/builder/picpush.php');

function intent_peperesp ($token, $text)
{
	if ($text == '') $text = 'no comment';
	if (strpos($text, "?"))
	{
	$text = str_replace("?","~q", $text);
	$text = 'Pertanyaannya adalah/'.$text;
	}
	else $text = 'Menurut saya/'.$text;
	
	$text = str_replace(" ","_", $text);
	$url = 'https://memegen.link/custom/'.$text.'.jpg?alt=https://i.imgflip.com/vkr13.jpg&font=impact';
	
	$id = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/weeb/files/groupid');
	if ($id == NULL) $id = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/weeb/files/userid');
	
	$data = picpush($id, $url, $url);
	return 'CUCKED';
}
?>