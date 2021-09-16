<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * TODO: Relacion uno a muchos (inversa)
     */

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function categoria()
    {
        return $this->belongsTo('App\Models\Categoria');
    }

    /**
     * TODO: Relacion uno a uno polimorfica
     */

    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    /**
     * TODO: Relacion uno a muchos polimorfica
     */
    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    /**
     * TODO: Relacion muchos a muchos polimorfica
     */
    public function tags()
    {
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}
