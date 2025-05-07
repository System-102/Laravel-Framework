<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WorkoutReminder extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        // You can pass data here later if needed
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('🏋️ Workout Reminder')
                    ->view('emails.workout-reminder'); // This view must exist
    }
}

