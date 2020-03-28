<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/builder/picmsg.php');

function intent_pepe($token)
{
    $selection=mt_rand(0,10);
    switch ($selection)
    {
        case 0:
		$url="https://pepethefrogfaith.files.wordpress.com/2016/09/pepe.png";
		break;
		
        case 1:
		$url="https://vignette.wikia.nocookie.net/pepe-the-frog/images/6/68/Smug_Pepe.png/revision/latest?cb=20150909150522";
		break;
		
	case 2:
		$url="https://vignette.wikia.nocookie.net/pbesantivirusisterrible/images/e/e1/Pepe_face.png/revision/latest?cb=20160925101729";
		break;
		
	case 3:
		$url="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7NeX9a158bB8RqGNVhUnscJY2SSkFo7Cst83dOHbBsDXCAZPzNQ";
		break;
		
	case 4:
		$url="https://i.pinimg.com/originals/c4/6f/4e/c46f4e5b6bc8ca21eab15d137cd0e146.png";
		break;
		
	case 5:
		$url="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9c8MAZuAytVXth4FWofOaLKdd7MJBM_Ytm2s6nk-R_xH7l-pz";
		break;
		
	case 6:
		$url="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPzmuxoctk1UgHOH6X1-UkWIrw68O-0VloYFK9q2eIkIsjUIHe";
		break;
		
	case 7:
		$url="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjvNiwvrzcdWxEEGY_gV0PacD7H_wKTJ-Uc5qM8nAMorWTYLWwbg";
		break;
		
	case 8:
		$url="https://i.warosu.org/data/biz/img/0035/41/1505837828291.png";
		break;
		
	case 9:
		$url="https://vignette.wikia.nocookie.net/ssb/images/5/57/Pepe.png/revision/latest/scale-to-width-down/480?cb=20151112020756";
		break;
    }
    
	$data=picmsg($token, $url, $url);
   	return $data;
}

?>