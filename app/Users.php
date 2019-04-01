<?php

namespace App;
use  \Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable=['name','email','password','remember_token'];
    protected $hidden=['password','remember_token'];
}
