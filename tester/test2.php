<?php
//include 'intent_pepe.php';
include 'picmsg.php';
//include 'randomizer.php';
//include 'intenthandler.php';

/*
$data = intent_handle("a","Pepe");
$data = json_encode($data);
echo $data;
*/

/*
$selection=randomize(100);
echo $selection;
*/

/*
$data = intent_pepe("a");
$data = json_encode($data);
echo $data;
*/


$token = "a";
$url="https://pepethefrogfaith.files.wordpress.com/2016/09/pepe.png";
$data = picmsg($token,$url,$url);
//$data = picmsg("a","b","c");
$data = json_encode($data);
echo $data;


/*
$data = randomize(10);
echo $data;
*/


echo "test";
?>