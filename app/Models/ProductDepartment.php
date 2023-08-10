<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductDepartment extends Pivot
{
    protected $fillable = [
        'hour',
        'order',
        'product_id',
        'department_id'
    ];
}
