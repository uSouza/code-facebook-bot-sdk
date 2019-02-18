<?php

namespace CodeBot\TemplatesMessage;

use CodeBot\Element\Button;
use CodeBot\Message\TemplatesMessage\ButtonsTemplate;
use PHPUnit\Framework\TestCase;

class ButtonsTemplateTest extends TestCase
{
    public function testReturnWithButtonInArray()
    {
        $buttonsTemplate = new ButtonsTemplate(1234);
        $buttonsTemplate->add(new Button('postback', 'Que tal uma resposta do Bot?', 'response'));
        $actual = $buttonsTemplate->message('Um exemplo de template com botoes');
        $expected = [
            'recipient' => [
                'id' => 1234
            ],
            'message' => [
                'attachment' => [
                    'type' => 'template',
                    'payload' => [
                        'template_type' => 'button',
                        'text' => 'Um exemplo de template com botoes',
                        'buttons' => [
                            [
                                'type' => 'postback',
                                'title' => 'Que tal uma resposta do Bot?',
                                'payload' => 'response',
                            ]
                        ]
                    ]
                ]
            ]
        ];

        $this->assertEquals($expected, $actual);
    }
}