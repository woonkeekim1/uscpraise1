<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PastorStory extends Model
{
    //
    protected $table ='PastorStories';
    protected $dates = ['created_at', 'updated_at', 'sermonDate'];

    public function author(){
    	return $this->belongsTo('\App\User', 'createdBy');
    }
}
