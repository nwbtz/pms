<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Event extends Model 
{
    protected $primaryKey = 'id';

    protected $table = 'events';

    protected $fillable = [
       'title','start_date','end_date', 'room_id','capacity','client','status','description','created_at', 'color','updated_at'
       
    ];

    

   

}