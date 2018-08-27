<?php

namespace App\Snail;

use function count;
use function is_null;

class Snail
{
    public function snail(array $array): array
    {
        $result = [];
        $n = count($array);
        if ($n < 1 || $n != count($array[0])) {
            return $result;
        }

        $totalElements = $n * $n;
        $x = 0;
        $y = -1;
        $move = 'y';
        $increase = true;
        while (count($result) < $totalElements) {
            $$move = $increase ? $$move + 1 : $$move - 1;

            $outOfRange = $$move < 0 || $$move == $n;
            if ($outOfRange || is_null($array[$x][$y])) {
                $$move = $increase ? $$move - 1 : $$move + 1;
                $increase = $move == 'x' ? !$increase : $increase;
                $move = $move == 'x' ? 'y' : 'x';
                continue;
            }

            $result [] = $array[$x][$y];
            $array[$x][$y] = null;
        }

        return $result;
    }
}