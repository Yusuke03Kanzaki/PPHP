<?php
class Sign0f1
{
    public function sing0f($n)
    {
        $sign = 0;

        if ($n > 0) {
            $sign = 1;
        } elseif ($n < 0) {
            $sign = -1;
        }

        return $sign;
    }

    echo '整数x:';
    $x = trim(fgets(STDIN));

    $s = $sign0f($x);
    echo '$sign0f($x)は', $s, 'です。';
}