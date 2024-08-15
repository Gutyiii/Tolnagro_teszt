<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Email;
use Illuminate\Support\Facades\Mail;

class SendEmails extends Command
{
    protected $signature = 'emails:send';
    protected $description = 'Send all emails to three random recipients.';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $emails = Email::all();
        $recipients = ['example1@example.com', 'example2@example.com', 'example3@example.com'];

        foreach ($emails as $email) {
            foreach ($recipients as $recipient) {
                Mail::raw($email->body, function ($message) use ($email, $recipient) {
                    $message->to($recipient)
                            ->subject($email->subject);
                });
            }
            $email->increment('sent_count');
        }

        $this->info('Emails have been sent successfully.');
    }
}
