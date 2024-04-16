<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'item';

    protected $primarykey = 'id';

    protected $fillable = ['itemnaam', 'itemprijs', 'subdrankkort'];

    public $timestamps = false;
}
