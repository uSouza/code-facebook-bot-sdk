<?php
/**
 * Created by PhpStorm.
 * User: uesley
 * Date: 24/02/19
 * Time: 09:55
 */

namespace CodeBot\TemplatesMessage;


use CodeBot\Element\Button;
use CodeBot\Element\Product;
use CodeBot\Message\TemplatesMessage\GenericTemplate;
use PHPUnit\Framework\TestCase;

class GenericTemplateTest extends TestCase
{
    public function testListWithTwoProducts()
    {
        $button = new Button('web_url', null, 'https://www.pandeco.com.br');
        $product = new Product('Produto 1', 'https://www.pandeco.com.br/img/produtos/tradicional.jpg', 'Marmita tradicional', $button);

        $button2 = new Button('web_url', null, 'https://www.pandeco.com.br');
        $product2 = new Product('Produto 2', 'https://www.pandeco.com.br/img/produtos/fitness.jpg', 'Marmita fitness', $button2);


        $template = new GenericTemplate(1234);
        $template->add($product);
        $template->add($product2);

        $actual = $template->message('teste');
        $expected = [
            'recipient' => [
                'id' => 1234
            ],
            'message' => [
                'attachment' => [
                    'type' => 'template',
                    'payload' => [
                        'template_type' => 'generic',
                        'elements' => [
                            [
                                'title' => 'Produto 1',
                                'subtitle' => 'Marmita tradicional',
                                'image_url' => 'https://www.pandeco.com.br/img/produtos/tradicional.jpg',
                                'default_action' => [
                                    'type' => 'web_url',
                                    'url' => 'https://www.pandeco.com.br',
                                ]
                            ],
                            [
                                'title' => 'Produto 2',
                                'subtitle' => 'Marmita fitness',
                                'image_url' => 'https://www.pandeco.com.br/img/produtos/fitness.jpg',
                                'default_action' => [
                                    'type' => 'web_url',
                                    'url' => 'https://www.pandeco.com.br',
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ];
        $this->assertEquals($expected, $actual);
    }

}