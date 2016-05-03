<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    //setNameAttribute
    public function setSermonDateAttribute($date)
    {
    	$this->attributes['sermonDate'] = Carbon::createFromFormat('Y-m-d', $date);
    }
}
