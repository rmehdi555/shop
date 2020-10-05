<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ActivationUserAccount extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    public  $user;
    public  $code;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct(User $user,$code)
    {
        $this->user=$user;
        $this->code=$user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject(__('web/public.activation_link'))->markdown('emails.active-user');
    }
}
