<?php

namespace Tests\Unit;

use App\Snail\Snail;
use PHPUnit\Framework\TestCase;

class SnailTest extends TestCase {
    public function testDescriptionExamples() {
        $sut = new Snail();
        $this->assertEquals([1, 2, 3, 6, 9, 8, 7, 4, 5], $sut->snail([
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9]
        ]));
        $this->assertEquals([1, 2, 3, 4, 5, 6, 7, 8, 9], $sut->snail([
            [1, 2, 3],
            [8, 9, 4],
            [7, 6, 5]
        ]));
        $this->assertEquals([1, 2, 3, 1, 4, 7, 7, 9, 8, 7, 7, 4, 5, 6, 9, 8], $sut->snail([
            [1, 2, 3, 1],
            [4, 5, 6, 4],
            [7, 8, 9, 7],
            [7, 8, 9, 7]
        ]));
        $this->assertEquals([], $sut->snail([[]]), 'Your solution should also work properly for an empty matrix');
    }
}
