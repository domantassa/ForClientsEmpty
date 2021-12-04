<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Atributas;
class Verslas extends Model
{
    //
    protected $guarded = []; 
    public function atributas()
    {
        return $this->belongsToMany(Atributas::class);
    }
}
