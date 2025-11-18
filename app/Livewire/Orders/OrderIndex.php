<?php

namespace App\Livewire\Orders;

use Livewire\Component;
use App\Models\Order;

class OrderIndex extends Component
{
    public function render()
    {
        $orders = Order::get();

        return view('livewire.orders.order-index', [
            'orders' => $orders,
        ]);
    }

    public function delete($id)
    {
        $order = Order::find($id);
        $order->delete();

        session()->flash("success", "Order Deleted.");
    }
}
