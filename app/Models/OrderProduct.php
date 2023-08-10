<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;
    protected $table="oreder_products";
    protected $fillable=[
        'id',
        'quantity',
        'department_id',
        'order_id',
        'product_id'
    ];
    public function order()
    {
        return $this->belongsTo('Order');
    }
    public function product()
    {
        return $this->belongsTo('Product');
    }
    public function department()
    {
        return $this->belongsTo('Department');
    }
}
