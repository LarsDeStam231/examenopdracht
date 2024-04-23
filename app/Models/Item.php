<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subdrank;

class Item extends Model
{
    use HasFactory;

    protected $table = 'item'; //tabelnaam

    protected $primaryKey = 'id'; //Primaire sleutel

    protected $fillable = ['itemnaam', 'itemprijs', 'subdrankkort']; //Vulbare velden

    public $timestamps = false; //Geen timestamps

    public function subdrank()
    {
        return $this->belongsTo(Subdrank::class, 'subdrankkort', 'subdrankkort');
    }
}
