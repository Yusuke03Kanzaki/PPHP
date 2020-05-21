<?php
echo '要素数？：';
$n = trim(fgets(STDIN));
$a =array_fill(0, $n, 0);

for ($i = 0; $i < $n; $i++) { 
    echo '$a[', $i, '] = ';
    $a[$i] = trim(fgets(STDIN));
}
for ($i = 0; $i < 2 * $n; $i++) { 
    $idx1 = rand(0, $n);
    $idx2 = rand(0, $n);
    $t = $a[$idx1];
    $a[$idx1] = $a[$idx2];
    $a[$idx2] = $t;
}
var_dump($a);

echo '要素をシャッフルしました', PHP_EOL;
for ($i = 0; $i < $n; $i++) { 
    echo 'a[', $i, '] = '. $a[$i], PHP_EOL;
}