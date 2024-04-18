<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'item'; //tabelnaam

    protected $primarykey = 'id'; //Primaire sleutel

    protected $fillable = ['itemnaam', 'itemprijs', 'subdrankkort']; //Vulbare velden

    public $timestamps = false; //Geen timestamps
}
