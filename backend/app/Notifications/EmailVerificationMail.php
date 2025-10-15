<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EmailVerificationMail extends Notification
{
    use Queueable;

    public $user;

    public $otp_code;
    /**
     * Create a new notification instance.
     */
    public function __construct(User $user, string $otp_code)
    {
        $this->user = $user;
        $this->otp_code = $otp_code;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Verify Your Email - Skild')
            ->greeting("Hello {$this->user->first_name}!")
            ->line('Thank you for signing up with Skild.')
            ->line("Your verification code is: **{$this->otp_code}**")
            ->line('This code will expire in 10 minutes.')
            ->line('If you did not create an account, please ignore this email.')
            ->salutation('Best regards, The Skild Team');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
