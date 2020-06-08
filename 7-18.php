<?php

class AryRmv {
    public function aryary($a, $idx, $b) {
        if ($idx >= 0 && $idx < $b) {
            for ($i = $idx; $i <= $b - 1; $i++) { 
                $a[$i] = $a[$i + 1];
                var_dump($a);
            }
            if ($idx == $b - 1) {
                # code...
            }
            return $a;
        }
    }
}

$ary = new AryRmv;
echo '要素数は？：';
$num = trim(fgets(STDIN));
$a = array_fill(0, $num, 0);
$b = count($a);

for ($i = 0; $i < $num; $i++) { 
    echo '$a['. $i. '] : ';
    $a[$i] = trim(fgets(STDIN));
}

echo '削除するインデックスは？：';
$idx = trim(fgets(STDIN));

$a = $ary->aryary($a ,$idx, $b);
foreach ($a as $value) {
    echo $value. PHP_EOL;
}