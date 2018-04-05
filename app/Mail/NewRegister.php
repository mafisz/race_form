<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewRegister extends Mailable
{
    use Queueable, SerializesModels;

    public $member;
    public $pdf;
    public $path;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $pdf, $path)
    {
        $this->member = $data;
        $this->pdf = $pdf;
        $this->path = $path;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->path){
            $info = pathinfo($this->path);

            return $this->markdown('emails.newRegister')
                        ->subject('Zgloszenie na rajd')
                        ->attach($this->path, 'potwierdzenie.'.$info['extension'])
                        ->attachData($this->pdf, 'zgloszenie.pdf', [
                            'mime' => 'application/pdf',
                        ]);
        }

        return $this->markdown('emails.newRegister')
                    ->subject('Zgloszenie na rajd')
                    ->attachData($this->pdf, 'zgloszenie.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }
}
