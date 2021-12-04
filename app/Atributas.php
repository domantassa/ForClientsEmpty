<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atributas extends Model
{
    //
    protected $guarded = [];
    public function verslas()
    {
        return $this->belongsToMany(verslas::class);
    }
}
