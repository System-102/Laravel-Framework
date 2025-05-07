<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WheyProteinReminder extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        // You can pass data here if needed later
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('💪 Don’t Forget Your Whey Protein!')
                    ->view('emails.whey-protein'); // This must exist
    }
}
