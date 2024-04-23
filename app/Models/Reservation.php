<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'user_id',
        'reservation_date',
        'reservation_time',
        'number_of_people',
        'allergies',
        'phone_number',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}