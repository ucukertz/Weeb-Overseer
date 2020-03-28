<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/filehandler.php');

 function page_title($url) 
	{
 	$data = file_get_contents($url, NULL, NULL, 200, 400);
    	$title = preg_match('/<title[^>]*>(.*?)<\/title>/ims', $data, $matches) ? $matches[1] : null;
    	return $title;
	}

	$url="https://myanimelist.net/anime/";
	$animeid=mt_rand(1,36100);
	$url=$url.$animeid;
	$title=page_title($url);
	$title=str_replace(" - MyAnimeList.net","",$title);

	echo $animeid;
	echo $title;
	
	if($title !="")
	{
	$title=str_replace(array("\r", "\n"),'',$title);
	$title=htmlspecialchars_decode($title);
	write_title($title);
	}
?>