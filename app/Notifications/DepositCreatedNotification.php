<?php

namespace App\Notifications;

use App\Models\Payment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DepositCreatedNotification extends Notification
{
    use Queueable;

    protected $payment;

    /**
     * Create a new notification instance.
     *
     * @param Payment payment
     * @return void
     */
    public function __construct(Payment $payment)
    {
        $this->payment = $payment;
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
        return (new MailMessage)
            ->greeting('Hello ' . $this->payment->user->username . ',')
            ->subject('Deposit Created')
            ->line('We noticed that you saved uncompleted deposit.')
            ->line('Please send the exact amount of the money in ' . $this->payment->wallet->name . ' to our ' . $this->payment->wallet->name . ' address: ' . $this->payment->wallet->address)
            ->line('For more enquires, please send us an email')
            ->line(config('myglobals.socials.email'))
            ->line('Thank you for investing with us 🚀');
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
