<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductResources extends Pivot
{
    protected $fillable = [
        'quantity'
    ];
}
