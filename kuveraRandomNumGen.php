<?php

$name = ( empty($argv[1]) ? (!empty($_GET['name']) ? $_GET['name'] : "") : $argv[1] ); 

echo getRandomNumber($name).PHP_EOL;

function getRandomNumber($name){
    $numbersArr = range(5,16);
    shuffle($numbersArr);
    for($i = 0;$i < 1;$i++)
       $digits .= $numbersArr[$i];
    return $name." ".$digits;
}

?>
