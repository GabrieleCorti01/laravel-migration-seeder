<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacanza extends Model
{
    protected $table = 'vacanze';
    protected $fillable = ['title', 'location', 'persone', 'date'];
}
