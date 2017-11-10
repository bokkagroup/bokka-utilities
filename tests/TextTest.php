<?php

require('../src/Text.php');

use PHPUnit\Framework\TestCase;
use Bokka\Utilities\Text as Text;

/**
 * @covers Text
 */

final class TextTest extends TestCase
{
    public function testTextIsTruncated()
    {
        $string = 'Lorem ipsum dolor sit amet, saperet noluisse suscipit quo ex, in tale nostrum interesset ius.';
        $limit = 10;
        $shortString = Text::limitWords($string, $limit);

        //text is shorter than before
        $this->assertLessThan(
            strlen($string),
            strlen($shortString)
        );

        //string word count equal to limit
        $this->assertEquals(
            $limit,
            str_word_count($shortString)
        );
    }
}

