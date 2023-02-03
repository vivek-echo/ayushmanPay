<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SignUp extends Notification
{
    use Queueable;
    public $firstName;
    public $lastName;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($firstName,$lastName)
    {
        $this->firstName=$firstName;
        $this->lastName=$lastName;
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
       dd($this->lastName);
        // return $this->view('Mail.signUp');
        return (new MailMessage)
        ->subject('OTP')
        ->view( 'mail.notification.custom_invoice');
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
