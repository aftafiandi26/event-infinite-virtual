<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;

class TestEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:email {email=test@example.com}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test email sending with Mailpit';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = $this->argument('email');

        $this->info("Testing email sending to: {$email}");
        $this->info("Mailpit should be running at: http://localhost:8025");

        try {
            Mail::raw('This is a test email from Laravel with Mailpit!', function ($message) use ($email) {
                $message->to($email)
                        ->subject('Test Email - Laravel + Mailpit');
            });

            $this->info("✅ Email sent successfully!");
            $this->info("📧 Check Mailpit at: http://localhost:8025");

        } catch (\Exception $e) {
            $this->error("❌ Email sending failed: " . $e->getMessage());
            $this->info("💡 Make sure Mailpit is running in Laragon");
        }
    }
}
