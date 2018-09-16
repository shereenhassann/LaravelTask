<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'name', 'email', 'password','address'
    ];
        public function products(){
            return $this->hasMany(Product::class);
        }
    protected $hidden = [
        'password', 'remember_token',
    ];
}
