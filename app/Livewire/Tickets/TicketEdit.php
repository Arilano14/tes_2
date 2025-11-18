<?php

namespace App\Livewire\Tickets;

use Livewire\Component;
use App\Models\Ticket;

class TicketEdit extends Component
{
    public $ticket, $nama_tiket, $harga, $detail;

    public function mount($id)
    {
        $this->ticket = Ticket::find($id);
        $this->nama_tiket = $this->ticket->nama_tiket;
        $this->harga = $this->ticket->harga;
        $this->detail = $this->ticket->detail;
    }

    public function render()
    {
        return view('livewire.tickets.ticket-edit');
    }

    public function submit()
    {
        $this->validate([
            "nama_tiket" => "required",
            "harga" => "required|numeric",
            "detail" => "required"
        ]);

        $this->ticket->nama_tiket = $this->nama_tiket;
        $this->ticket->harga = $this->harga;
        $this->ticket->detail = $this->detail;
        $this->ticket->save();

        return to_route('tickets.index')->with('success', 'Ticket Updated.');
    }
}
