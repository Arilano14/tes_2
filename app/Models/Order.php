<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_id',
        'jumlah_tiket',
        'total_harga',
        'status',
        'detail',
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
