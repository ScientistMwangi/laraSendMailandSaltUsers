<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ActivateActivateAccount extends Mailable
{
    use Queueable, SerializesModels;

	
	public $username=" ";
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name)
    {
		$this->username=$name;
		//$this->username=$username;      
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
		//echo $this->username;
        return $this->view('mail.accountActivation');
	/*	->with([
                        'Username2' => $this->username,  // for protected variables                  
               ]
		);*/
		
		
    }
}
