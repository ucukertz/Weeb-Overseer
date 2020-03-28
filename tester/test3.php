<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/intent/intenthandler.php');

$test = intent_handle("a","Kejutan","https://cdn.shopify.com/s/files/1/0884/0512/products/image_deee5fa2-d39b-40bf-8d4f-7ee4a12584e3_1024x1024.jpg?v=1461288591");
$test=json_encode($test);

echo $test;
?>