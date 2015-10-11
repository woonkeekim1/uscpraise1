<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SundaySermon extends Model
{
    //
    protected $table ='SundaySermon';
    protected $dates = ['created_at', 'updated_at', 'sermonDate'];
    protected $fillable = ['title', 'body', 'audio', 'createdBy', 'sermonDate'];
    public function author()
    {
    	return $this->belongsTo('\App\User', 'createdBy');
    }
}
