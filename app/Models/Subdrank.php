<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Subdrank extends Model
{
    use HasFactory;

    protected $table = 'subdrank'; //Tabelnaam

    protected $primaryKey = 'id'; //Primaire sleutel

    protected $fillable = ['subdranknaam', 'drankkort', 'subdrankkort']; //Vulbare velden

    public $timestamps = false;//Geen timestamps

    public function items()
    {
        return $this->hasMany(Item::class, 'subdrankkort', 'subdrankkort');
    }

    public function drank()
    {
        return $this->belongsTo(Drank::class, 'drankkort', 'drankkort');
    }
}
