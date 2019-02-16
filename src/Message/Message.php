<?php

namespace CodeBot\Message;

interface Message
{
    public function __construct($recipientId);
    public function message($messageText);
}