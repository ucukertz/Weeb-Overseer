<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/builder/objectmsg.php');
include_once ($_SERVER['DOCUMENT_ROOT'].'/weeb/misc/userinfo.php');

function intent_swear ($token)
{
$object = 
'
{
    "type": "template",
    "altText": "NO SWEARING",
    "template": {
      "type": "buttons",
      "title": "I am a christian bot",
      "thumbnailImageUrl": "https://example.com/bot/images/image.jpg",
      "text": "Hell is waiting",
      "actions": [
        {
          "type": "message",
          "label": "Apologize",
          "text": "I am sorry bot"
        }
      ]
    }
  }
';

$object = json_decode($object);

$titlelist = array(
'I am a christian bot',
'No swearing',
'You swore :(',
'Swearing is bad',
'Think of the children',
'Language!',
'Please stop swearing',
'God knows all',
'Bad word!',
'Swearing is not cool',
'Not cool');

$imagelist = array(
'https://cdn.shopify.com/s/files/1/1061/1924/files/Sad_Face_Emoji.png',
'https://cdn3.iconfinder.com/data/icons/smileys-people-smiley-essential/48/v-67-512.png',
'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDm3M_W7tARemjEZDVVW7xO0lcps-HiP6wBneyv-CfsBzTwFt6',
'https://i.imgflip.com/lscwj.jpg',
'https://daybreaksdevotions.files.wordpress.com/2012/05/disappointed-face-300x199.jpg',
'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXEoINUNGYWmxSkVjveqNw2MsV2Z5n96wpoLQkWKurtgepW4nd',
'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDm3M_W7tARemjEZDVVW7xO0lcps-HiP6wBneyv-CfsBzTwFt6',
'https://ih0.redbubble.net/image.121992421.1725/ap,550x550,12x12,1,transparent,t.u3.png',
'https://i.pinimg.com/236x/c6/f4/18/c6f4188d7b0eb9a52d4a9779b1d757d8--reaction-pictures-fresh-prince.jpg',
'https://image.freepik.com/free-photo/closeup-of-upset-annoyed-blonde-guy-with-disgusted-face_1262-14171.jpg');

$textlist = array(
'Be considerate of others.',
'I am disappointed at you.',
'Apologize to everyone.',
'Just stop.',
'Hell is waiting if you do not repent.',
'Just do not say it again.',
'Door to forgiveness is still open.',
'This is awkward.',
'Do not say that again.',
'You can do better.',
'Could have worded that better.');


$object->template->title = $titlelist[mt_rand(0,7)];
$object->template->thumbnailImageUrl = $imagelist[mt_rand(0,9)];
$object->template->text = /*username().', '.*/$textlist[mt_rand(0,10)];

$object = json_encode($object);


$data = objectmsg ($token, $object);
return $data;

}


?>