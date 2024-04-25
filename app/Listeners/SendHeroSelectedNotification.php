<?php

namespace App\Listeners;

use App\Events\HeroSelected;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendHeroSelectedNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(HeroSelected $event): void
    {
        //
    }
}
