<?php

namespace App\Models;
use App\Models\activityLogs;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // protected static function booted(): void
    // {
    //     static::created(function ($blog) {
    //         activityLogs::create([
    //             'description' => 'Created Blog' .$blog->title
    //         ]);
    //     });
    //     static::updated(function ($blog) {
    //         activityLogs::create([
    //             'description' => 'Updated Blog ' .$blog->title
    //         ]);
    //     });
    //     static::deleted(function ($blog) {
    //         activityLogs::create([
    //             'description' => 'Deleted Blog ' .$blog->title
    //         ]);
    //     });
    // }
}
