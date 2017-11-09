<?php

use PHPUnit\Framework\TestCase;
use Bokka\Utilities\Data as Data;

/**
 * @covers Data
 */

final class DataTest extends TestCase
{
    /**
     * private $states property shouldn't be accessed directly
     */
    // public function testStatesPropertyCannotBeAccessed()
    // {}

    /**
     * getStates should return a non-empty array
     * with the first element equal to AL
     */
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

        //should have 50 items
        $this->assertCount(50, $states);

        //first item in array should be AL
        $firstStateAbbr = reset($states);
        $this->assertEquals(
            'AL',
            $firstStateAbbr
        );
    }
}
