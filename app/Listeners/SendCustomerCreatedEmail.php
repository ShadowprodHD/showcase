<?php

namespace App\Listeners;

use App\Events\CustomerCreated;
use App\Mail\CustomerCreatedMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendCustomerCreatedEmail
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
     * @param  CustomerCreated  $event
     * @return void
     */
    public function handle(CustomerCreated $event)
    {
        $customer = $event->customer;

        Mail::to($customer)->send(new CustomerCreatedMail($customer));
    }
}
