<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
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
        return $this->roles()->where('name', $role)->exists();
    }

    public function assignRoleBasedOnEmail()
{
    if (strpos($this->email, 'admin') !== false) {
        $this->assignRole('admin');
    } elseif (strpos($this->email, 'kok') !== false) {
        $this->assignRole('kok');
    } elseif (strpos($this->email, 'barman') !== false) {
        $this->assignRole('barman');
    } else {
        $this->assignRole('gebruiker');
    }
}

}
