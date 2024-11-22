<?php
declare(strict_types=1);
require "snake_case.php";

$test = " Hola Mundo Cruel ñoÑo 9 veces @#%& y /(? media ";
echo PHP_EOL;
echo "The string to turn into Snake Case format : \"$test\"";
$snake = new SnakeCaseConverter();
$test_snake = $snake->MakeSnake($test);
echo PHP_EOL;
echo "The NEW string turned into Snake Case format : \"$test_snake\"";
echo PHP_EOL;
echo PHP_EOL . "Let's check a var_dump() : " . PHP_EOL;
var_dump($test_snake);
echo PHP_EOL;

echo "You can now try by yourself as many times as you want" . PHP_EOL;
do {
    $exit = 0;
    echo "To try press \"1\"... If you want to quit the app press any other key : ";
    $exit = (int) readline();
    if ($exit != 0) {
        echo PHP_EOL;
        $test = readline("Please, indicate the string to turn into Snake Case format : ");
        $test_snake = $snake->MakeSnake($test);
        echo PHP_EOL;
        echo "The NEW string turned into Snake Case format : \"$test_snake\"";
    }
    echo PHP_EOL;
} while ($exit != 0);
echo PHP_EOL;

?>