<?php

namespace App\Listeners;

use App\Events\LocationCreated;
use App\Models\Subscriber;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendNewLocationNotification
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
    public function handle(LocationCreated $locationCreated): void
    {
        $subscribers = Subscriber::all();

        foreach ($subscribers as $subscriber) {
            Mail::raw("Новая статья: {$locationCreated->location->title}", function ($message) use ($subscriber) {
                $message->to($subscriber->email)
                    ->subject('Новая статья на сайте');
            });
        }
    }
}
