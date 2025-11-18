<?php

namespace App\Livewire\Tickets;

use Livewire\Component;
use App\Models\Ticket;

class TicketIndex extends Component
{
    public function render()
    {
        $tickets = Ticket::get();

        return view('livewire.tickets.ticket-index', [
            'tickets' => $tickets,
        ]);
    }

    public function delete($id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();

        session()->flash("success", "Ticket Deleted.");
    }
}
