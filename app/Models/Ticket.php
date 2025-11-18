<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ["nama_tiket", "harga", "detail"];

    /**
     * Relasi: Satu tiket bisa dimiliki oleh banyak order.
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
