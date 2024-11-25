<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    /**
     * Create a new message instance.
     */
    public function __construct($contact)
    {
        $this->contact = $contact; // Сохраняем данные контакта
    }

    /**
     * Get the message envelope.
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS', 'test@example.com'), env('MAIL_FROM_NAME','testname'))
                    ->subject('Новое сообщение с контактной формы')
                    ->view('emails.contact_form')
                    ->with([
                        'contact' => $this->contact, // Данные для представления
                    ]);
    }
}

