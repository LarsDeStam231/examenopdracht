<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reservation;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'reservation_id',
        'selected_items',
    ];


}
