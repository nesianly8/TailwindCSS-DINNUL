<?php

namespace App\Observers;

use App\Models\Blog;
use App\Models\activityLogs;

class BlogObserver
{
    /**
     * Handle the Blog "created" event.
     */
    public function created(Blog $blog): void
    {
        // activityLogs::create([
        //     'description' => 'Created Blog ' .$blog->title
        // ]);
    }

    /**
     * Handle the Blog "updated" event.
     */
    public function updated(Blog $blog): void
    {
        // activityLogs::create([
        //     'description' => 'Updated Blog ' .$blog->title
        // ]);
    }

    /**
     * Handle the Blog "deleted" event.
     */
    public function deleted(Blog $blog): void
    {
        // activityLogs::create([
        //     'description' => 'Deleted Blog ' .$blog->title
        // ]);
    }

    /**
     * Handle the Blog "restored" event.
     */
    public function restored(Blog $blog): void
    {
        //
    }

    /**
     * Handle the Blog "force deleted" event.
     */
    public function forceDeleted(Blog $blog): void
    {
        //
    }
}
