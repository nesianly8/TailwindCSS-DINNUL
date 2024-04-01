<?php

namespace App\Listeners;

use App\Events\BlogProcessed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\activityLogs;

class SendBlogNotification
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
    public function handle(BlogProcessed $event): void
    {
        // activityLogs::create([
        //     'description' => 'Created Blog' .$event->blog->title
        // ]);
    }
}
