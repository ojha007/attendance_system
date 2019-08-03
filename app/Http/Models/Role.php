<?php

namespace App\Http\Models;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends  Model
{
    protected  $table='roles';
   public function user(){
       return $this->belongsTo(User::class);
   }

}
