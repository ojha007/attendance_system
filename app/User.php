<?php

namespace App;


use App\Http\Models\Role;
use Illuminate\Notifications\Notifiable;;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password','role_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function role(){
        return $this->hasOne(Role::class,'id','role_id');
    }
    public function is($name){
        if($this->role->slug == $name){
            return true;
        }
        return false;

    }


}
