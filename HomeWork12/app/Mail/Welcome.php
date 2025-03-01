<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class Welcome extends Mailable
{
    use Queueable, SerializesModels;

    public User $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    // public function __construct(string $name)
    // {
    //     //
    //     $this->name=$name;
    // }
    public function __construct(User $user)
    {
        //
        $this->user=$user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */

    public function build(){
        $subject='Домашнее задание 12';
        // loadView('resume',['data'=>$data])
        // $name='test name';
        // return $this->subject($subject)->view('emails.welcome',['name'=>$name]);
        return $this->subject($subject)->view('emails.welcome',['user'=>$this->user]);
    }
}
