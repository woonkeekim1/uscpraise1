<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $table ='Gallery';
    public function author()
    {
    	return $this->belongsTo('\App\User', 'createdBy');
    }
}
