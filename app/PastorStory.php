<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PastorStory extends Model
{
    //
    protected $table ='PastorStories';
    protected $dates = ['created_at', 'updated_at'];
    protected $fillable = ['title', 'content', 'createdBy', 'hits'];

    public function author(){
    	return $this->belongsTo('\App\User', 'createdBy');
    }
}
