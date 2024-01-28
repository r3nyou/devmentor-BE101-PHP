<?php

namespace App;

use App\Sms;
use App\Email;
use App\Language;
use App\RegisterSuccessEvent;

class User
{
    protected $language;

    public function __construct(Language $language)
    {
        $this->language = $language;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function register()
    {
        $notifyChannels = [new Email(), new Sms()];
        $event = new RegisterSuccessEvent($notifyChannels);    
        $event->dispatch($this);
    }
}