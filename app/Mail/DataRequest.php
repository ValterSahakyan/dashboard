<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DataRequest extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->from($address = 'noreply@denovosciences.ai', $name = 'Denovo Sciences')
            ->to($this->details['request']->email, $this->details['request']->email)
            ->subject($this->details["project"]->title)->attach($this->details["file"])
            ->markdown('emails.request');
    }
}
