<?php

namespace CodeBot\Message;

class Audio implements Message
{
    private $recipientId;

    public function __construct($recipientId)
    {
        $this->recipientId = $recipientId;
    }

    public function message($messageText)
    {
        return [
            'recipient' => [
                'id'=> $this->recipientId
            ],
            'message' => [
                'attachment' => [
                    'type' => 'audio',
                    'payload' => [
                        'url' => $messageText
                    ]
                ]
            ]
        ];
    }
}