<?php

function stkmsg ($key, $stkpid = 0, $stkid = 0)
{
	$data = new \stdClass();
	$data->replyToken = $key;

	switch ($stkpid)
	{
	case 0:
		$stkpid = mt_rand(1, 2);
		switch ($stkpid)
			{
			case 1:
				$stkid = mt_rand(1, 430);
				break;
				case 2:
				$stkid = mt_rand(18, 527);
				break;
			}
		break;
	case 1:
		$stkid = mt_rand(1, 430);
		break;
	case 2:
		$stkid = mt_rand(18, 527);
		break;
	}

	$stkpid = strval($stkpid);
	$stkid = strval($stkid);

	$messages = array
	(
	    	array
		(
	    	"type" => "sticker", 
	    	"packageId" => $stkpid, 
	    	"stickerId" => $stkid
		)
	);
	$data->messages=$messages;
	
	return $data;
}

?>