<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forwarder extends Model
{
    protected $fillable = ['id', 'name', 'surname', 'user_id', 'company_id'];
}
