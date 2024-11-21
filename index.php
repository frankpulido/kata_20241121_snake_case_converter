<?php
declare(strict_types=1);
require "snake_case.php";

$test = " Hola Mundo Cruel ñoÑo 9 veces @#%& y /(? media ";
echo PHP_EOL;
echo "The string to turn into Snake Case format : \"$test\"";
$snake = new SnakeCaseConverter();
$snake = $snake->MakeSnake($test);
echo PHP_EOL;
echo "The NEW string turned into Snake Case format : \"$snake\"";
echo PHP_EOL;
echo PHP_EOL . "Let's check a var_dump() : " . PHP_EOL;
var_dump($snake);
echo PHP_EOL;
?>