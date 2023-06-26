<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = ['id', 'name', 'surname', 'car', 'user_id', 'forwarder_id'];

    public function forwarders()
    {
        return $this->hasOne(Forwarder::class);
    }

    public function transports() {
        return $this->belongsToMany(Transport::class, 'driver_transports');
    }

    public function user() {
        return $this->hasOne(User::class);
    }
}
