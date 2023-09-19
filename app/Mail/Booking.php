<?php

namespace App\Mail;

use App\Models\Booking as ModelsBooking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class Booking extends Mailable
{
    use Queueable, SerializesModels;

    public $id;
    /**
     * Create a new message instance.
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * Get the message envelope.
     */

     public function build()
     {
        $booking = ModelsBooking::find($this->id);
         return $this->subject('Thank you for subscribing to our newsletter')
         ->markdown('emails.booking', compact('booking'));
     }
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Booking',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
