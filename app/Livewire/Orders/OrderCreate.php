<?php

namespace App\Livewire\Orders;

use Livewire\Component;
use App\Models\Order;
use App\Models\Ticket;

class OrderCreate extends Component
{
    public $ticket_id, $jumlah_tiket, $total_harga, $status, $detail;

    public function render()
    {
        $tickets = Ticket::get();

        return view('livewire.orders.order-create', [
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

        Order::create([
            'ticket_id' => $this->ticket_id,
            'jumlah_tiket' => $this->jumlah_tiket,
            'total_harga' => $this->total_harga,
            'status' => $this->status,
            'detail' => $this->detail,
        ]);

        return to_route('orders.index')->with('success', 'Order Created.');
    }
}
