<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Department extends Model 
{
    protected $primaryKey = 'dept_id';

    protected $table = 'department';

    protected $fillable = [
       'dept_id', 'dept_name', 'dept_desc','color', 'created_at', 'updated_at'
       
    ];

    

   

}