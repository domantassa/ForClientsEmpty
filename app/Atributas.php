<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Verslas;
class Atributas extends Model
{
    //
    protected $guarded = [];
    public function verslas()
    {
        return $this->belongsToMany(Verslas::class);
    }
}
