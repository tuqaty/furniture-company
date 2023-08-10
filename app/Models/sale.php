<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable=[

        'date','quantity','price','hall_id','product_id'
    ];
    protected $casts=['date'=>'datetime'];
    public function hall()
    {
        return $this->belongsTo(Hall::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
