<?php

namespace App;

class Email extends NotifyChannel
{
    public function notify(string $message)
    {
        echo '[Email]' . $message . PHP_EOL;
    }
}