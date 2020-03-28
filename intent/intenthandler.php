<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/misc/apiforward.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/intent/intent_pepe.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/intent/intent_kejutan.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/intent/intent_recommend.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/intent/intent_quote.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/intent/gacha.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/intent/intent_swear.php');


function intent_handle($json, $token)
{
	if ($json->result->source == 'agent')
	{
    $intent = $json->result->metadata->intentName;
    $url = $json->result->parameters->url;
    $q = $json->result->resolvedQuery;
	$text = $json->result->fulfillment->speech;
    
    $data = gacha($token, $q, $text);

	
    if ($data == 0)
	{   
		$data = apiforward($token, $text);
		
    	switch ($intent) 
	{
		case 'Pepe':
			$data=intent_pepe($token);
			break;
			
		case 'Kejutan':
		    	$data=intent_kejutan($token, $url);
		    	break;

		case 'Recommend':
		    	$data=intent_recommend($token);
		    	break;

		case 'Quote':
		    	$data=intent_quote($token);
		    	break;
				
		case 'Swear':
		    	$data=intent_swear($token);
		    	break;

	}
	}
	}
	else
	{
	$text = '';	
		
		
	$data = gacha($token, $q, $text);	
	}
	
	$data = json_encode($data);
	lastrep($data);
	linereply($data);
}


?>