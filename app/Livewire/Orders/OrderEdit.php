<?php

namespace App\Livewire\Orders;

use Livewire\Component;
use App\Models\Order;
use App\Models\Ticket;

class OrderEdit extends Component
{
    public $order, $ticket_id, $jumlah_tiket, $total_harga, $status, $detail;

    public function mount($id)
    {
        $this->order = Order::find($id);
        $this->ticket_id = $this->order->ticket_id;
        $this->jumlah_tiket = $this->order->jumlah_tiket;
        $this->total_harga = $this->order->total_harga;
        $this->status = $this->order->status;
        $this->detail = $this->order->detail;
    }

    public function render()
    {
        $tickets = Ticket::get();

        return view('livewire.orders.order-edit', [
            'tickets' => $tickets,
        ]);
    }

    public function updatedTicketId()
    {
        $this->updateTotalHarga();
    }

    public function updatedJumlahTiket()
    {
        $this->updateTotalHarga();
    }

    private function updateTotalHarga()
    {
        if ($this->ticket_id && $this->jumlah_tiket > 0) {
            $ticket = Ticket::find($this->ticket_id);
            if ($ticket) {
                $this->total_harga = $ticket->harga * $this->jumlah_tiket;
            }
        } else {
            $this->total_harga = 0;
        }
    }

    public function submit()
    {
        $this->validate([
            "ticket_id" => "required|exists:tickets,id",
            "jumlah_tiket" => "required|integer|min:1",
            "status" => "required",
            "detail" => "required"
        ]);

        $this->order->ticket_id = $this->ticket_id;
        $this->order->jumlah_tiket = $this->jumlah_tiket;
        $this->order->total_harga = $this->total_harga;
        $this->order->status = $this->status;
        $this->order->detail = $this->detail;
        $this->order->save();

        return to_route('orders.index')->with('success', 'Order Updated.');
    }
}
