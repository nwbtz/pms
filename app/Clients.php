<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'clients';

    protected $fillable = [
       'id', 'name', 'email', 'company', 'phone'
    ];

}
