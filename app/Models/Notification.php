<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'read_at',
        'user_id',
    ];

    // relationships
    public function user()
    {
        $this->belongsTo(User::class);
    }
}
