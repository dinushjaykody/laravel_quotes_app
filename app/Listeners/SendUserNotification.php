<?php

namespace App\Listeners;

use App\Events\QuoteCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendUserNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  QuoteCreated  $event
     * @return void
     */
    public function handle(QuoteCreated $event)
    {
        $author = $event->author;
        $email = $event->email;

        Mail::send('email.user_notification',['name'=>$author],function ($messeage) use ($email,$author){
            $messeage->from('admin@myquote.com','Dinush');
            $messeage->to($email, $author);
            $messeage->subject('Thank you for your quote !!');

        });
    }
}
