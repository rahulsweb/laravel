<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\EmailTemplate;

class RegisterUser extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user=$user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $showtemplates = EmailTemplate::where('key','user_register')->get();
       
      
        foreach($showtemplates as $showtemplate){
            $template = htmlspecialchars_decode($showtemplate->message);
            }
    
            $template = $this->replace($template,$this->user);
    
            return $this->from('rahul@gmail.com')->subject($showtemplate->subject)->view('email_template')->with('template',$template);
        }

        public function replace($template,$user){    
                  
           
                $template = str_replace('{{email}}', $user->email,$template);  
          
                $template = str_replace('{{password}}', $user->password,$template);  
        
                return $template;
    
        }

    
}
