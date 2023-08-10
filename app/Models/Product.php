<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Laravel\Nova\Fields\BelongsTo;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'name',
        'description',
        'profit_rate',
        'image'
    ];


    public function departments()
    {
    return $this->belongsToMany(Department::class)->using(ProductDepartment::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)->using(OrederProduct::class);
    }

    public function halls()
    {
        return $this->belongsToMany(Hall::class,'hall_products')->withPivot('quantity_limit','quantity');
    }
    public function resources()
    {
        return $this->belongsToMany(Resource::class,'product_resources')->withPivot(['quantity','quantity_limit']);
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

}
