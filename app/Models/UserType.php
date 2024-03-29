<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $fillable = ['id','title'];

    function user() {
        $this->hasOne(User::class);
    }
}
