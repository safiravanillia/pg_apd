<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    public function apd()
    {
        return $this->belongsTo('App\apd');
    }

    public function karyawan()
    {
        return $this->belongsTo('App\karyawan');
    }

    public function admin()
    {
        return $this->belongsTo('App\admin');
    }
}
