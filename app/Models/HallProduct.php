<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class HallProduct extends Model
{
    use HasFactory,Notifiable;
    protected $fillabke=[
        'id',
        'quantity',
        'quantity_limit',
        'hall_id',
        'product_id'
    ];
}
