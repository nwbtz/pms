<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'projects';

    protected $fillable = [
      'name', 'descriptions', 'p_owner','p_category', 'client', 'start_date', 'end_date', 'filename', 'created_at', 'updated_at'
       
    ];

}
