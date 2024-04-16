<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subdrank extends Model
{
    use HasFactory;

    protected $table = 'subdrank';

    protected $primaryKey = 'id';

    protected $fillable = ['subdranknaam', 'drankkort', 'subdrankkort'];

    public $timestamps = false;
}
