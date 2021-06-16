<?php

namespace App;
use App\Role;
use App\dat_per;
use App\dat_aca;
use App\acta;
use App\cedula;
use App\rif;
use App\vitae;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /*******************************/
    /*******************************/
    /*******************************/
    /**modelos relacionados **/
    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function dat_per()
    {
        return $this->hasOne(dat_per::class);
    }  

    public function dat_aca()
    {
        return $this->hasOne(dat_aca::class);
    }  

    public function acta()
    {
        return $this->hasOne(acta::class);
    }  

    public function cedula()
    {
        return $this->hasOne(cedula::class);
    } 
    
    public function rif()
    {
        return $this->hasOne(rif::class);
    } 

    public function vitae()
    {
        return $this->hasOne(vitae::class);
    } 
    /*******************************/
    /*******************************/
    /*******************************/
    /*******************************/
    /*******************************/
    /**funciones para los roles **/
    public function authorizeRoles($roles)
    {
        abort_unless($this->hasAnyRole($roles), 401);
        return true;
    }

    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true; 
            }   
        }
        return false;
    }

    public function hasRole($role)
    {
        if ($this->roles()->where('nombre', $role)->first()) {
            return true;
        }
        return false;
    }
}
