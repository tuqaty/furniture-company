<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'phone_number',
        'image',
        'role_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
      // relationships
    public function department()
    {
         return $this->hasOne(Department::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
    public function complains()
    {
        return $this->hasMany(Complain::class);
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function hall()
    {
        return $this->hasOne(Hall::class);
    }
    public function userfree()
    {
        $users = User::doesntHave('hall');
        return $users;
    }

}



