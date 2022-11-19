<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Mail;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ContactUs extends Component
{
    use LivewireAlert;

    public $name        = "";
    public $contact     = "";
    public $subject     = "";
    public $text        = "";

    public function send()
    {
        $data = [
            'name' => $this->name,
            'contact' => $this->contact,
            'subject' => $this->subject,
            'text' => $this->text
        ];
        Mail::send('mail.contact-us', $data, function($message) {
            $message->to('mostafaemon.info@gmail.com', 'She Collection')->subject
               ('Contact Us Notification');
            $message->from('support@shecollectionbd.com','She Collection');
        });

        $this->name        = "";
        $this->contact     = "";
        $this->subject     = "";
        $this->text        = "";

        $this->confirm('We received your message!');
    }

    public function render()
    {
        return view('livewire.contact-us');
    }
}
