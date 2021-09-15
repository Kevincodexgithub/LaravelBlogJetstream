<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * TODO: Relacion uno a muchos inversa
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * TODO: Relacion polimorfica
     */
    public function commentable()
    {
        return $this->morphTo(); //con esto se especifica que la tabla comment es una tabla polimorfica
    }
}
