<?php

namespace App\DirectionReduction;

class DirectionReduction
{
    public function dirReduc($arr)
    {
        $opposites = [
            "NORTH" => 'SOUTH',
            "SOUTH" => 'NORTH',
            "EAST" => 'WEST',
            "WEST" => 'EAST',
        ];

        $dirReduced = [];

        foreach ($arr as $item) {
            if (!empty($dirReduced)) {
                $isOppositeDirection = $dirReduced[count($dirReduced) - 1] == $opposites[$item];
                if ($isOppositeDirection) {
                    array_pop($dirReduced);
                    continue;
                }
            }
            $dirReduced[] = $item;
        }

        return $dirReduced;
    }
}
