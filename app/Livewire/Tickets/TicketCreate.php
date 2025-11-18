<?php

namespace App\Livewire\Tickets;

use Livewire\Component;
use App\Models\Ticket;

class TicketCreate extends Component
{
    public $nama_tiket, $harga, $detail;

    public function render()
    {
        return view('livewire.tickets.ticket-create');
    }

    public function submit()
    {
        $this->validate([
            "nama_tiket" => "required",
            "harga" => "required|numeric",
            "detail" => "required"
        ]);

        Ticket::create([
            "nama_tiket" => $this->nama_tiket,
            "harga" => $this->harga,
            "detail" => $this->detail
        ]);

        return to_route('tickets.index')->with('success', 'Ticket Created.');
    }
}
