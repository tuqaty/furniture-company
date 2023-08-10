<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Attach;
class Role extends Model
{
    use HasFactory;
    protected $fillable=[
        'id',
        'name',
        'slug'
    ];
    public function users()
    {
        return $this->hasMany('User');
    }
    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }
}
