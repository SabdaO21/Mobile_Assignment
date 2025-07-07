<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'price',
        'description',
        'img'
    ];

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
