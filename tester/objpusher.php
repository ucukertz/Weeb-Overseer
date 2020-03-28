<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/builder/objectpush.php');

$id = 'Udc8c1b8fda317000e06c0fa4cc05ee59';
$object = 
'
{"replyToken":"c9235a0cdcf04be7be00ece230adbd94","messages":[{"type":"template","altText":"NO SWEARING","template":{"type":"buttons","title":"Think of the children","thumbnailImageUrl":"https:\/\/theperfectmasks.files.wordpress.com\/2011\/07\/cute-pug-dog-sad-face-crying_large.jpg","text":"Fuad Sultan Muhammad, i am disappointed at you.","actions":[{"type":"message","label":"Apologize","text":"I am sorry bot"}]}}]}
';

objectpush($id, $object);

?>