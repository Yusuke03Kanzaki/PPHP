<?php
class Coordinate {
    static private $x;
    static private $y;

    function __construct($x, $y) {
        // var_dump($x, $y);
        self::$x = $x;
        self::$y = $y;
        // var_dump(self::getX(), self::getY());
    }

    static function getX() {
        return self::$x; 
    }

    static function getY() {
        return self::$y;
    }

    function setX($x) {
        self::$x = $x;
    }

    function setY($y) {
        self::$y = $y;
    }

    function set($x, $y) {
        self::$x = $x;
        self::$y = $y;
    }
}

// echo '座標pを入力せよ。'. PHP_EOL;
// echo 'X座標：';
// $x = trim(fgets(STDIN));
// echo 'Y座標：';
// $y = trim(fgets(STDIN));

// $p = new Coordinate($x, $y);
// $p->setX(1);
// var_dump($p->getX());
// // }