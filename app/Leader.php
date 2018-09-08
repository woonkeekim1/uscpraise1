<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    //
    protected $table ='leaders';
    protected $dates = ['created_at', 'updated_at'];
    protected $fillable = ['name', 'content', 'createdBy', 'hits'];
}
