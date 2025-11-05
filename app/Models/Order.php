<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_name',
        'items',
        'total',
        'status',
    ];

    protected $casts = [
        'items' => 'array', // automatically decode JSON to array
    ];
}
