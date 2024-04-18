<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subdrank extends Model
{
    use HasFactory;

    protected $table = 'subdrank'; //Tabelnaam

    protected $primaryKey = 'id'; //Primaire sleutel

    protected $fillable = ['subdranknaam', 'drankkort', 'subdrankkort']; //Vulbare velden

    public $timestamps = false;//Geen timestamps
}
