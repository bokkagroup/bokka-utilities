<?php

require('./src/Video.php');

use PHPUnit\Framework\TestCase;
use Bokka\Utilities\Video as Video;

/**
 * @covers Video
 */

final class VideoTest extends TestCase
{
    private $url = 'https://www.youtube.com/watch?v=iaT_jxxfRXU';
    private $otherURL = 'https://youtu.be/Tiab9TDzwo0';

    public function testCanGetVideoIDfromURL()
    {
        //video ID not empty
        $this->assertNotEmpty(Video::getIDFromVideoURL($this->url));
        $this->assertNotEmpty(Video::getIDFromVideoURL($this->otherURL));

        //video ID is a string
        $this->assertInternalType(
            'string',
            Video::getIDFromVideoURL($this->url)
        );

        $this->assertInternalType(
            'string',
            Video::getIDFromVideoURL($this->otherURL)
        );
    }

    public function testCanGetEmbedURL()
    {
        //should not return original url
        $this->assertNotEquals(
            $this->url,
            Video::getEmbedURL($this->url)
        );

        $this->assertNotEquals(
            $this->otherURL,
            Video::getEmbedURL($this->otherURL)
        );

        //url contains "embed" or "video"
        $this->assertRegexp(
            '/(embed|video)/',
            Video::getEmbedURL($this->url)
        );

        $this->assertRegexp(
            '/(embed|video)/',
            Video::getEmbedURL($this->otherURL)
        );

        //url contains correct video ID
        $this->assertContains(
            Video::getIDFromVideoURL($this->url),
            Video::getEmbedURL($this->url)
        );

        $this->assertContains(
            Video::getIDFromVideoURL($this->otherURL),
            Video::getEmbedURL($this->otherURL)
        );
    }
}
