<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class apd extends Model
{
    public function kategori()
    {
        return $this->belongsTo('App\kategori');
    }

    public function peminjaman()
    {
        return $this->hasMany('App\peminjaman');
    }
}
