<?php

namespace Tests\Unit;

use App\DirectionReduction\DirectionReduction;
use PHPUnit\Framework\TestCase;

class DirectionReductionTest extends TestCase
{
    private function revTest($actual, $expected)
    {
        $this->assertEquals($expected, $actual);
    }

    public function testBasics()
    {
        $sut = new DirectionReduction();
        $a = ["NORTH", "SOUTH", "SOUTH", "EAST", "WEST", "NORTH", "WEST"];
        $this->revTest($sut->dirReduc($a), ["WEST"]);
        $b = ["NORTH", "SOUTH", "SOUTH", "EAST", "WEST", "NORTH"];
        $this->revTest($sut->dirReduc($b), []);
        $c = ["NORTH", "SOUTH", "SOUTH", "EAST", "WEST", "NORTH", "NORTH"];
        $this->revTest($sut->dirReduc($c), ["NORTH"]);
    }
}
