<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Mail\UserWelcome;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserWelcomeEmail implements ShouldQueue
{
    public $user;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  UserCreated  $event
     * @return void
     */
    public function handle(UserCreated $event)
    {
        Mail::to($event->user)->send(new UserWelcome($event->user));
    }
}
