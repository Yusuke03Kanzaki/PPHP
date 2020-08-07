<?php
require('9-1_class.php');

class CoordinateTester2 extends Coordinate {

    static function compCoordinate($c1, $c2) {
        return self::getX($c1) == self::getX($c2) && self::getY($c1) == self::getY($c2);//getX()には引数がないから無理じゃね？
    }
}

// $x;
// $y;
echo '座標pを入力せよ。'. PHP_EOL;
echo 'X座標：';
$a = trim(fgets(STDIN));
echo 'Y座標：';
$b = trim(fgets(STDIN));
$p = new CoordinateTester2($x, $y);

echo '座標qを入力せよ。'. PHP_EOL;
echo 'X座標：';
$x = trim(fgets(STDIN));
echo 'Y座標：';
$y = trim(fgets(STDIN));

$q = new CoordinateTester2($x, $y);
// var_dump($p->getX(), $p->getY());

// $p->set($a, $b);
var_dump($p->getX(), $p->getY()); //上書きされている?
var_dump($q->getX(), $q->getY());



echo ($p == $q ? 'p == qです。' : 'p != qです。'). PHP_EOL;
echo ($p->getX() == $q->getX() && $p->getY() == $q->getY() ? 'pとqは等しいです。' : 'pとqは等しくありません。'). PHP_EOL;
echo (CoordinateTester2::compCoordinate($p, $q) ? 'pとqは等しいです。' : 'pとqは等しくありません。'). PHP_EOL;
