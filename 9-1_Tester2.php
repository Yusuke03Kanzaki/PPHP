<?php
require('9-1_class.php');

class CoordinateTester2 extends Coordinate {

    static function compCoordinate($c1, $c2) {
        // var_dump($c1, $c2);
        return self::getX($c1) == self::getX($c2) && self::getY($c1) == self::getY($c2);
    }
}

$x;
$y;
echo '座標pを入力せよ。'. PHP_EOL;
echo 'X座標：';
$x = trim(fgets(STDIN));
echo 'Y座標：';
$y = trim(fgets(STDIN));
$p = new CoordinateTester2($x, $y);

echo '座標qを入力せよ。'. PHP_EOL;
echo 'X座標：';
$x = trim(fgets(STDIN));
echo 'Y座標：';
$y = trim(fgets(STDIN));
$q = new CoordinateTester2($x, $y);

echo ($p == $q ? 'p == qです。' : 'p != qです。'). PHP_EOL;
echo ($p->getX() == $q->getX() && $p->getY() == $q->getY() ? 'pとqは等しいです。' : 'pとqは等しくありません。'). PHP_EOL; //pとqは等しいです。なぜ？
echo (CoordinateTester2::compCoordinate($p, $q) ? 'pとqは等しいです。' : 'pとqは等しくありません。'). PHP_EOL; //pとqは等しいです。なぜ？
// echo $p->x. $p->y. PHP_EOL; //11
// echo $q->y. $q->y. PHP_EOL; //00
