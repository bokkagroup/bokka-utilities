<?php

require('./src/Utilities.php');

use PHPUnit\Framework\TestCase;
use Bokka\Utilities\Utilities as Utilities;

/**
 * @covers Utilities
 */

final class UtilitiesTest extends TestCase
{
    public function testUtilitiesInstance()
    {
        $utilities = Utilities::getInstance();

        //utilities class should return instance
        $this->assertEquals(
            $utilities,
            Utilities::getInstance()
        );

        //environment variable is local
        $this->assertEquals(
            'local',
            BOKKA_ENV
        );
    }
}

