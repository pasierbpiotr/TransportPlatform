<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['id', 'name', 'street', 'city', 'NIP', 'picture'];

    function forwader() {
        $this->hasMany(Forwarder::class);
    }
}
