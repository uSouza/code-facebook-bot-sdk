<?php

namespace CodeBot\Message\TemplatesMessage;


use CodeBot\Element\ElementInterface;


class ListTemplate implements TemplateInterface
{
    protected $products = [];
    protected $recipientId;

    public function __construct($recipientId)
    {
        $this->recipientId = $recipientId;
    }

    public function add(ElementInterface $element)
    {
        $this->products[] = $element->get();
    }

    public function message($messageText)
    {
        return [
            'recipient' => [
                'id' => $this->recipientId
            ],
            'message' => [
                'attachment' => [
                    'type' => 'template',
                    'payload' => [
                        'template_type' => 'list',
                        'elements' => $this->products
                    ]
                ]
            ]
        ];
    }
}