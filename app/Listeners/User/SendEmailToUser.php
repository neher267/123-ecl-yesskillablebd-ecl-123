<?php

namespace App\Listeners\User;

use App\Events\User\UserLogedIn;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailToUser
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
     * @param  UserLogedIn  $event
     * @return void
     */
    public function handle(UserLogedIn $event)
    {
        dump($event->user->email);
        dd('Finished!');
    }
}
