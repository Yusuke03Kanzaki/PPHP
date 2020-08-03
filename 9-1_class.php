<?php
class Coordinate {
    static private $x;
    static private $y;

    function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    static function getX() {
        return self::$x; 
    }

    static function getY() {
        return self::$y;
    }

    function setX($x) {
        $this->x = $x;
    }

    function setY($y) {
        $this->y = $y;
    }

    function set($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
}

// echo '座標pを入力せよ。';
// echo 'X座標：';
// $x = trim(fgets(STDIN));
// echo 'Y座標：';
// $y = trim(fgets(STDIN));

// $Cooordinate_p = new Coordinate($x, $y) {
    
// }