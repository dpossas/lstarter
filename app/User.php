<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'super_admin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email'
    ];

    public function roles()
    {
        return $this->belongsToMany(\App\Models\Role::class,'role_user');
    }

    public function hasPermission(\App\Models\Permission $permission)
    {
        return $this->hasAnyRoles($permission->roles);
    }

    public function hasAnyRoles($roles)
    {
        if ( is_array($roles) || is_object($roles) ){
            return $roles->intersect($this->roles)->count() > 0;
        }

        return $this->roles->contains('name', $roles);
    }

    public function isSuperAdmin()
    {
        return $this->super_admin == 1;
    }

    public function setPasswordAttribute($value)
    {
        if ( Hash::needsRehash($value) ){
            $this->attributes['password'] = Hash::make($value);
        } else {
            $this->attributes['password'] = $value;
        }
    }
}
