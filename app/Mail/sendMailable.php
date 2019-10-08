<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendMailable extends Mailable{
    use Queueable, SerializesModels;
    public $username;
    public $subject;
    public $view;
    public $token;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject,$view,$username,$token){
        $this->username=$username;
        $this->view=$view;
        $this->subject=$subject;
        $this->token=$token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        return $this->view($this->view)->subject($this->subject)->from("shopsmart34244@gmail.com","Admin Maskapai");
    }
}
