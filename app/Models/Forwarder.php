<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use App\Models\Company;

class Forwarder extends Model
{
    protected $fillable = ['id', 'name', 'surname', 'user_id', 'company_id'];

    public function company() {
        return $this->hasOne(Company::class);
    }

    public function drivers() {
        return $this->hasMany(Driver::class);
    }

    public function user() {
        return $this->hasOne(User::class);
    }
}
