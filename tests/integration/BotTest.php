<?php

namespace CodeBot;

use PHPUnit\Framework\TestCase;
use CodeBot\Build\Solid;

class BotTest extends TestCase
{
    private $pageAccessToken = 'EAAULMtzVZBIcBABmMZAeSxC27dhtABkTSnwVzZAMGrIeNluXok0t1pfY8DNh8HXZAVbUfS6q6ExR3ZBMRONwtoNLQJB7ZAizZAsXhQL8GcC9DgdZAVyW7x6a9gIjLnz5i5KZCBGUwf7FLroCVYpeT6zUkPoNQjj9AgiT1fgFD0pVcdgZDZD';

    public function testAddMenu()
    {
        $call_to_actions = [
            [
                'id' => 1,
                'type' => 'nested',
                'title' => 'O que eu posso fazer?',
                'parent_id' => 0,
                'value' => null
            ],
            [
                'id' => 2,
                'type' => 'web_url',
                'title' => 'Visite nosso site',
                'parent_id' => 0,
                'value' => 'https://www.pandeco.com.br'
            ],
            [
                'id' => 3,
                'type' => 'web_url',
                'title' => 'Quer fazer um pedido?',
                'parent_id' => 1,
                'value' => 'http://pedido.pandeco.com.br/'
            ],
            [
                'id' => 4,
                'type' => 'postback',
                'title' => 'Ver opções iniciais?',
                'parent_id' => 1,
                'value' => 'Iniciar'
            ],
        ];
        $bot = Solid::factory();
        Solid::setPageAccessToken($this->pageAccessToken);
        $bot->addMenu('default', false, $call_to_actions);
        $this->assertTrue(true);
    }

    public function testRemoveMenu()
    {
        $bot = Solid::factory();
        Solid::setPageAccessToken($this->pageAccessToken);
        $bot->removeMenu();
        $this->assertTrue(true);
    }

    public function testAddGetStartedButton()
    {
        $bot = Solid::factory();
        Solid::setPageAccessToken($this->pageAccessToken);
        $bot->addGetStartedButton('iniciar');
        $this->assertTrue(true);
    }

    public function testRemoveGetStartedButton()
    {
        $bot = Solid::factory();
        Solid::setPageAccessToken($this->pageAccessToken);
        $bot->removeGetStartedButton('iniciar');
        $this->assertTrue(true);
    }

}