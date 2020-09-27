<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Verification;

class UserConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The verification instance.
     *
     * @var Verification
     */
    public $verification;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Verification $verification)
    {
        $this->verification = $verification;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.user.confirmation')
                ->with([
                    'url' => 'http://localhost:8080/verification/' . $this->verification->token,
                ]);
    }
}
