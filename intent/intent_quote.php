<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/builder/txtmsg.php');

function intent_quote($token)
{
    $selection=mt_rand(0,27);
    switch ($selection)
    {
        case 0:
		$text='"Merdeka kon" - Aswin, 2016';
		break;
		
        case 1:
		$text='"Temenmu itu lho" - Aswin, 2016';
		break;
		
	case 2:
		$text='"Aku ngikut saja" - Ion Caesar, 4-11-2016';
		break;
		
	case 3:
		$text='"Sesuatu yang sudah ditusuk satu kali akan lebih mudah ditusuk untuk kedua kalinya" - Fahrizal H.U., 2016';
		break;
		
	case 4:
		$text='"intinya selingkuh..... SELINGKUH...." - Fahrizal H.U., 2017';
		break;
		
	case 5:
		$text='"Never nuke a country twice" - Non-weeb, 2013';
		break;
		
	case 6:
		$text='"Sory ya, sudah tidak zaman buka situs porno,.... hentai..." - Fuad Sultan M., 2017';
		break;
		
	case 7:
		$text='"Tidur saja, berangkat melelahkan" - Weeb Overseer, 2017';
		break;
		
	case 8:
		$text='"SSR gue yang oppainya gede" -M. Farhan, 2017';
		break;
		
	case 9:
		$text='"Menggoreng 1000 tempe membutuhkan waktu 5 + 1000 menit" -Waru Dj, 2017';
		break;
	case 10:
		$text='"Dipegang-pegang aja sampai mau" -Ion Caesar, 2017';
		break;
	case 11:
		$text='"Punyamu kecil Ion. Punyaku gede." -Fahrizal H.U., 2017';
		break;
	case 12:
		$text='"Supaya gampang keluarnya daripada maju mundur maju mundur" -Ion Caesar, 2017';
		break;
	case 13:
		$text='"Vanila susu... rasanya kayak susu vanila"  -Fahrizal H.U., 2017';
		break;
	case 14:
		$text='"Kalo gak tau ya cari lah" -Rudy Yuwono, 2017';
		break;
	case 15:
		$text='"Maling itu selalu di depan polisi" -Waru Dj, 2017';
		break;
	case 16:
		$text='"Mau bagaimana lagi. Dosa turunan memang seperti itu" -Waru Dj, 2017';
		break;
	case 17:
		$text='"Hai ISIS, goodbye ISIS" -Fahrizal H.U., 2017';
		break;
	case 18:
		$text='"Done... Ga usah diperpanjang lgi.... Huft" -M. Farhan, 2017';
		break;
	case 19:
		$text='"itu lo, seperti Ion.. Berani dua ratus enam puluh satu ribu" -Unggul Wibawa, 2017';
		break;
	case 20:
		$text='"Cocoi nacoi" -M. Farhan, 2017';
		break;
	case 21:
		$text='"Ada Nekopara, ngapain yang lain?" -Fuad Sultan M., 2017';
		break;
	case 22:
		$text='"Idolmaster favoritku itu Freyja" -Fuad Sultan M.,2017';
		break;
	case 23:
		$text='"Aku cuma pakai 3G, ded" -Ion Caesar, 2017';
		break;
	case 24:
		$text='"mau selingkuh berjamaah atau sendiri, sama busuknya" -Fuad Sultan M., 2017';
		break;
	case 25:
		$text='"Kalian semua objek ya" -Adharul Muttaqin, 2018';
		break;
	case 26:
		$text='"Komputer saya lambat" -Adharul Muttaqin .::MACbook::. , 2018';
		break;
	case 27:
		$text='kek';
		break;

    }
    
	$data=txtmsg($token, $text);
   	return $data;
}

?>