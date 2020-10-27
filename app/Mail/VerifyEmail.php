<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;


class VerifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The user instance.
     *
     * @var user
     */
    public $user;

    /**
     * The verification link.
     *
     * @var user
     */

    public $verificationUrl;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            Carbon::now()->addMinutes(60),
            ['id' => $this->user->id]
        );

        return $this->subject('Verify your email')->view('emails.verify-email');
    }
}
