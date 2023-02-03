<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SignUpOtp extends Notification
{
    use Queueable;
    protected $response;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($response)
    {
        $this->response =$response ; 
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        
        $res['name']=$this->response['firstName']." ".$this->response['lastName'];
        $res['otp']=$this->response[0]['otp'];
        $res['email']=$this->response['email'];
        return (new MailMessage)
        ->subject('OTP')
        ->view( 'Mail.signUp',$res);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
