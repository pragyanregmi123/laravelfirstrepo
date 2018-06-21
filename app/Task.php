<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
     protected $fillable = [
        'name', 
        'days', 
        'hours',
        'user_id',
        'project_id',
        'company_id',
    ];
}
