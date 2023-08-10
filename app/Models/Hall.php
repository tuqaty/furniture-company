<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Laravel\Nova\Fields\BelongsTo as FieldsBelongsTo;
use App\Models\Notification;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;

class Hall extends Model
{
    use HasFactory ,Notifiable;
    protected $fillable=[
        'id',
        'name',
        'address',
        'telephone',
        'user_id'
    ];

    public function orders()
    {
       return $this->hasMany(Order::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function sales():HasMany
    {
        return $this->hasMany(Sale::class);
    }
    public function products()
    {
        return $this->belongsToMany(Product::class,'hall_products')->withPivot('quantity_limit','quantity');
    }

}
?>
