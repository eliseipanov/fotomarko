<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
	
     */
	public $data;

    public function __construct($data)
    {
        //
	$this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
    $address = 'admin@fotomarko.de';
        $subject = 'This is a demo!';
        $name = 'Oleksii Marchenko';

        return $this->view('emails.test')
	->from($address, $name)
        ->cc($address, $name)
        ->bcc($address, $name)
        ->replyTo($address, $name)
        ->subject($subject)
        ->with([ 'test_message' => $this->data['message'] ]);;
    }
}
