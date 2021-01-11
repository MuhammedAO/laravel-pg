<?php

namespace App\Providers;

use App\Events\NewCustomerHasRegisteredEvent;
// use App\Listeners\WelcomeNewCustomerListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    //where events and listeners meet
    protected $listen = [
        NewCustomerHasRegisteredEvent::class => [
            \App\Listeners\WelcomeNewCustomerListener::class,
            \App\Listeners\RegisterCustomerToNewsLetter::class,
            \App\Listeners\NotifyAdminViaSlack::class
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
