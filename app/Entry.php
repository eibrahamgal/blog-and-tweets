<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

use Illuminate\Support\Str;

class Entry extends Model
{
    public function user(){

    	return $this->belongsTo(User::class);

    }


     public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
    	$this->attributes['slug'] = Str::slug($value);
    }

	 public function geturl()
	{
    return url('entries/'.$this->slug.'-'.$this->id);
	}
}
