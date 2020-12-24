<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\VentaNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use Illuminate\Queue\InteractsWithQueue;

class VentaListener
{
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        User::all()
        ->except($event->venta->user_id)
        ->each(function(User $user)use($event){

            Notification::send($user, new VentaNotification($event->venta));

        });
    }
}


//User::all()
//->except($post->user_id)
//->each(function(User $user)use($post){
  //  $user->notify(new VentaNotification($post));
//});
