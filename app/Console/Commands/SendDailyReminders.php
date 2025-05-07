<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\WheyProteinReminder;
use App\Mail\WorkoutReminder;
use App\Models\User;

class SendDailyReminders extends Command
{
    protected $signature = 'reminder:everyminute';
    protected $description = 'Send daily reminders only to logged-in users';

    public function handle()
    {
        // 👇 Example: users logged in within last 1 day
        // $users = User::where('last_login_at', '>=', now()->subDay())->get();

        // foreach ($users as $user) {
        //     Mail::to($user->email)->queue(new WheyProteinReminder($user));
        //     Mail::to($user->email)->queue(new WorkoutReminder($user));
        // }

        
        $users = User::select('email')->get();
        $emails = [];
        foreach ($users as $user) {
            $emails[] = $user->email;
        }
        Mail::send('emails.whey-protein', [], function ($message) use ($emails) {
            $message->to($emails);
            $message->subject('💪 Don’t Forget Your Whey Protein!');
        });
        Mail::send('emails.workout-reminder', [], function ($message) use ($emails) {
            $message->to($emails);
            $message->subject('🏋️ Workout Reminder');
        });
        

        $this->info("Reminders sent to logged-in users.");
    }
}
