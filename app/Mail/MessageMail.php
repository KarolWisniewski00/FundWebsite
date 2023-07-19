<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MessageMail extends Mailable
{
    use Queueable, SerializesModels;
    
    protected $data;
    /**
     * Create a new message instance.
     *
     * @param $token
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@phoenixfoundiation.com', $this->data->name)
        ->subject('Message from website')
        ->view('mail',['data'=>$this->data]);
    }
}
