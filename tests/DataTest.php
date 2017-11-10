<?php

require('./src/Data.php');

use PHPUnit\Framework\TestCase;
use Bokka\Utilities\Data as Data;

/**
 * @covers Data
 */

final class DataTest extends TestCase
{
    public function testGetStatesReturnsNonEmptyArray()
    {
        $states = Data::getStates();

        //returns array
        $this->assertInternalType(
            'array',
            $states
        );

        //array is not empty
        $this->assertNotEmpty($states);

        //array should contain key Alabama
        $this->assertArrayHasKey(
            'Alabama',
            $states
        );
    }
}
