<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verslas extends Model
{
    //
    protected $guarded = [];
    public $table = 'verslai'; 
    public function atributas()
    {
        return $this->belongsToMany(Atributas::class);
    }
}
