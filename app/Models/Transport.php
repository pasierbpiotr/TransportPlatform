<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $fillable = ['id', 'starting_place', 'finishing_place', 'merchendise', 'mass', 'transport_date'];

}
