<?php
class ShiftValue {
    public function pow2($no) {
        $pw = 1;

        while ($no-- > 0) {
            $pw *= 2;
            var_dump($pw);
        return $pw;
        }
    }
}

$shift = new ShiftValue;

echo '整数をnビットシフトします。'. PHP_EOL;
echo 'x：';
$x = trim(fgets(STDIN));
echo 'n；';
$n = trim(fgets(STDIN));

$mPower = $x * $shift->pow2($n);
$dPower = $x / $shift->pow2($n);

$lShift = $x << $n;
$rShift = $x >> $n;

echo sprintf('[a] $x X (2の%d乗) = %d', $n, $mPower). PHP_EOL;
echo sprintf('[b] $x X (2の%d乗) = %d', $n, $dPower). PHP_EOL;
echo sprintf('[c] $x << %d =%d', $n, $lShift). PHP_EOL;
echo sprintf('[d] $x >> %d =%d', $n, $rShift). PHP_EOL;

echo '[a]と[c]の値は一致'. ($mPower == $lShift) ? 'します。' :'しません。';
echo '[b]と[d]の値は一致'. ($dPower == $rShift) ? 'します。' :'しません。';