<?php

namespace App;

class Utility {
    public  static function printArr(array $array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
}