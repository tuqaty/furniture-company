<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'hour_price',
        'user_id',
    ];


    public function produts()
    {
        return $this->belongsToMany(Product::class)->using(ProductDepartment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
