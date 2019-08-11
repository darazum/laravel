<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->click('#register_link')
                ->value('#name', 'Dima' . mt_rand(1,6))
                ->value('#email', 'darazum' . mt_rand(1,6) . '@mail.ru')
                ->value('#password', '123456')
                ->value('#password-confirm', '123456')
                ->press('Register')
                ->assertSee('Logged');
        });
    }
}
