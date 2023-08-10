<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Nova\Notifications\NovaNotification;


class Resource extends Model
{
    use HasFactory,Notifiable;

    protected $fillable = [
        'name',
        'is_essential',
        'unit',
        'quantity',
        'quantity_limit',
        'unit_price',
    ];

    protected $casts=[
        'is_essential'=>'boolean'
    ];
    // relationships
    public function products()
    {
        $this->belongsToMany(Product::class)->withPivot(['quantity','quantity_limit']);
    }

    
}
