<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ContactFormTest extends DuskTestCase
{
    /**
     @test
     */
    // public function testExample()
    // {
    //     $this->browse(function (Browser $browser) {
    //         $browser->visit('/contato')
    //                 ->assertSee('Contato');
    //     });
    // }

    // public function testIfInputsExists()
    // {
    //     $this->browse(function(Browser $browser) {
    //         $browser->visit('/contato')
    //                 ->assertSee('Nome completo')
    //                 ->assertSee('E-mail')
    //                 ->assertSee('Mensagem');
    //     });
    // }

    public function testIfContactFormIsWorking()
    {
        $this->browse(function(Browser $browser) {
            $browser->visit('/contato')
                    ->type('name', 'Wallace')
                    ->type('email', 'wallacesales@gmail.com')
                    ->type('message', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.')
                    ->press('Enviar mensagem')
                    ->waitFor('.toast-message')
                    ->assertPathIs('/laravel-do-zero/public/contato')
                    ->assertSee('O formulário foi enviado com sucesso!');
        });
    }
}
