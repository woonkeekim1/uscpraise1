<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SundaySermon extends Model
{
    //
    protected $table ='SundaySermon';
    public function author()
    {
    	return $this->belongsTo('\App\User', 'createdBy');
    }
}
