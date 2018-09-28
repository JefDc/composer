<?php
require '../vendor/autoload.php';


$hello = new \HelloWorld\SayHello();
echo $hello::world();

$hello = new \App\Wcs\Hello();
echo $hello->talk();

?>