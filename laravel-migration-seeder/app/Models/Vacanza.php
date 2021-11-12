<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacanza extends Model
{
    protected $fillable = ['title', 'location', 'persone', 'date'];
}
