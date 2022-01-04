<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable=
        [
    'food_name',
            'price',
            'quantity',
            'user_name',
            'user_phone',
            'user_address',
        ];
}
