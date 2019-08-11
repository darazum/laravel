<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{

    use WithoutMiddleWare;

    /**
     * A basic test example.
     *
     * @return void
     */
//    public function testBasicTest()
//    {
//        $response = $this->get('/');
//
//        $response->assertStatus(200);
//    }

    public function testBooks()
    {
        $response = $this->get('/books');

        $response->assertSee('Books');
    }
}
