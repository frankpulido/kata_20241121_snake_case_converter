<?php
declare(strict_types=1);

class SnakeCaseConverter {

    public function MakeSnake($string) : string {
        $snake = "";
        $snake = str_replace("ñ","n",mb_strtolower($string));
        $snake = preg_replace("/[^a-zA-Z0-9 ]/", "", $snake);
        // Above we filter special characters (pregreplace) accepting only A-Za-z0-9 and empty spaces.
        // $snake = str_replace(" ","_", $snake); // Discarded. The reason : This command replaces white spaces for underscores but may return multiple underscores concatenated
        $snake = trim($snake);
        $snake = preg_replace('/\s+/', '_', $snake); // Solved!! multiple spaces are replaced by a single underscore
        return $snake;
    }
}
?>