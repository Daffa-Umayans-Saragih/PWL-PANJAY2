<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderSuccessMail extends Mailable
{
    public $order;
    public $billing;

    public function __construct($order, $billing = null)
    {
        $this->order = $order;
        $this->billing = $billing;
    }

    public function build()
    {
        $subject = (strtolower($this->order?->order_type) === 'membership') 
            ? 'Your MET Membership Invoice' 
            : 'Your Ticket Order';

        return $this->subject($subject)
            ->view('emails.order-success')
            ->with([
                'order'   => $this->order,
                'billing' => $this->billing
            ]);
    }
}