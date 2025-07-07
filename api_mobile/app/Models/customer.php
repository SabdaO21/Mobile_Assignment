<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'customer',
        'phonenumber',
        'password',
        'location'
        
    ];

    public function orders(){
        return $this->hasMany(Order::class);
    }
}

