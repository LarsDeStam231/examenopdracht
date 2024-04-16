<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drank extends Model
{
    use HasFactory;

    protected $table = 'drank'; // Tabelnaam

    protected $primaryKey = 'id'; // Primaire sleutel

    protected $fillable = ['dranknaam', 'drankkort']; // Vulbare velden

    // Geen timestamps
    public $timestamps = false;
}
