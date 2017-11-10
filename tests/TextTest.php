<?php

require('../src/Text.php');

use PHPUnit\Framework\TestCase;
use Bokka\Utilities\Text as Text;

/**
 * @covers Text
 */

final class TextTest extends TestCase
{
    private $limit = 10;
    private $string = 'Lorem ipsum dolor sit amet, saperet noluisse suscipit quo ex, in tale nostrum interesset ius.';

    public function testTextIsTruncated()
    {
        $shortString = Text::limitWords($this->string, $this->limit);

        //text is shorter than before
        $this->assertLessThan(
            strlen($this->string),
            strlen($shortString)
        );

        //string word count equal to limit
        $this->assertEquals(
            $this->limit,
            str_word_count($shortString)
        );
    }
}

