<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testRandomBook()
    {
        $book = \App\Service\Book::getRandomBook($randId);
        $this->assertInstanceOf(\App\Book::class, $book, 'id = ' . $randId);
    }
}
