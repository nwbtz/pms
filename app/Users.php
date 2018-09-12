<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Model 
{
    protected $primaryKey = 'id';

    protected $table = 'users';

    protected $fillable = [
       'id', 'name', 'email', 'password', 'remember_token', 'phone', 'role', 'status', 'department', 'created_at', 'updated_at'
       
    ];

    

   

}