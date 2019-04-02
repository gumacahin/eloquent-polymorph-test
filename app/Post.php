<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function image()
    {
        //return $this->belongsTo(Image::class);
        return $this->morphOne(Image::class, 'imageable');
        //return $this->morphMany(Image::class, 'imageable');
    }
}
