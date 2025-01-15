<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @param array $data
     * @return void
     */
    public function __construct($data = [])
    {
        $this->data = array_merge([
            'subject' => 'Default Subject',
            'message' => 'This is a default message for testing emails in Laravel.'
        ], $data);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.test')
                    ->with('data', $this->data)
                    ->subject($this->data['subject']);
    }
}
