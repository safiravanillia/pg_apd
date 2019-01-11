<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    public function apd()
    {
        return $this->hasMany('App\apd');
    }
}
