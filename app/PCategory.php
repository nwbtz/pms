<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PCategory extends Authenticatable
{
    protected $primaryKey = 'id';

    protected $table = 'project_cat';

    protected $fillable = [
       'id', 'name', 'pdescriptions'
       
    ];
}
