<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ForgetPassword extends Mailable
{
    use Queueable, SerializesModels;
	protected $username='';
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name)
    {
        //
		$this->username=$name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.forgetPassword')->with(['username'=>$this->username,]);
    }
}
