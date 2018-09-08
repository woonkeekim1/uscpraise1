<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailySermon extends Model
{
    //
    protected $table ='DailySermon';
    protected $dates = ['created_at', 'updated_at'];
    protected $fillable = ['title', 'body', 'createdBy'];
    public function author()
    {
    	return $this->belongsTo('\App\User', 'createdBy');
    }
    public function setCreateDateAttribute($date)
    {
    	$this->attributes['created_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }
}
