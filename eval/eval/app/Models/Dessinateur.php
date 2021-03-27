<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Dessinateur extends Model
{
    public function personnage()
    {
        return $this->belongsToMany(Personnage::class);
    }
}
