<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class Order extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'date',
        'notes',
        'hall_id',
        'status'
    ];

    protected $casts=['date'=>'datetime','accepted_date'=>'datetime'];

    public function hall()
    {
        return $this->belongsTo(Hall::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class)->using(ProductDepartment::class);
    }
    public static function boot()
    {
        parent::boot();
        static::creating(function($order)
        {
            if(!$order->hall_id)
            {
                $order->hall_id = Auth::user()->hall->id;
            }
        });
    }

}
?>
