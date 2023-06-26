<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $fillable = ['id', 'starting_place', 'finishing_place', 'merchandise', 'mass', 'transport_date'];

    public function driver() {
        return $this->belongsToMany(Driver::class, 'driver_transports');
    }
}
