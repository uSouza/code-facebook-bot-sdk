<?php

namespace CodeBot\Message\TemplatesMessage;


use CodeBot\Element\ElementInterface;
use CodeBot\Message\Message;


class ButtonsTemplate implements Message
{
    protected $buttons = [];
    protected $recipientId;

    public function __construct($recipientId)
    {
        $this->recipientId = $recipientId;
    }

    public function add(ElementInterface $element)
    {
        $this->buttons[] = $element->get();
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
                        'template_type' => 'button',
                        'text' => $messageText,
                        'buttons' => $this->buttons
                    ]
                ]
            ]
        ];
    }
}