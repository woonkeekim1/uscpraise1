<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    //
    protected $table ='Help';
    protected $dates = ['created_at', 'updated_at'];
    protected $fillable = ['name', 'email', 'pickup', 'bank', 'phone', 'else', 'elseText', 'assignedTo', 'status'];
}
