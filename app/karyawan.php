<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    public function peminjaman()
    {
        return $this->hasMany('App\peminjaman');
    }
}
