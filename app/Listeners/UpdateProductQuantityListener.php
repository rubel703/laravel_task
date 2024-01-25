<?php

// namespace App\Listeners;

// use Illuminate\Contracts\Queue\ShouldQueue;
// use Illuminate\Queue\InteractsWithQueue;

// class UpdateProductQuantityListener
// {
//     /**
//      * Create the event listener.
//      */
//     public function __construct()
//     {
//         //
//     }

//     /**
//      * Handle the event.
//      */
//     public function handle(object $event): void
//     {
//         //
//     }
// }

namespace App\Listeners;

use App\Events\ProductPurchased;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateProductQuantityListener implements ShouldQueue
{
    public function handle(ProductPurchased $event)
    {
        $product = $event->product;

        $newQuantity = $product->quantity - 1;
        $product->update(['quantity' => $newQuantity]);

        \Log::info('Product quantity updated: ' . $product->id);
    }
}

