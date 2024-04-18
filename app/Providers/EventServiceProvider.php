<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Observers\UserObserver;
use App\Models\User;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        // ...
    ];

    public function boot()
    {
        User::observe(UserObserver::class);
    }
}