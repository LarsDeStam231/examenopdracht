<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Log;
use App\Models\Role;

class User extends Authenticatable
{
    use Notifiable;
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'rolename', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->hasOne(Role::class);
    }

    public function hasRole($role)
    {
        return $this->rolename === $role;
    }

    public function hasAnyRole($roles)
    {
        return in_array($this->rolename, $roles);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

}
