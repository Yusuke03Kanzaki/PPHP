<?php

class AryRmv {
    public function aryary($c, $idx) {
        unset($c[$idx]);
        var_dump($c);
        return $c;
    }
}

$ary = new AryRmv;
echo '要素数は？：';
$b = trim(fgets(STDIN));
$c = array_fill(0, $b, 0);
for ($i = 0; $i < $b; $i++) { 
    echo '要素の値は？：';
    $c[$i] = (int)trim(fgets(STDIN));
}
var_dump($c);

// foreach ($c as $value) {
//     echo $value. PHP_EOL;
// }
echo '削除するインデックスは？：';
$idx = trim(fgets(STDIN));
$ary->aryary($c ,$idx);
foreach ($c as $keykey) {
    echo $keykey. PHP_EOL;
}