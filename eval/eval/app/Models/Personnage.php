<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personnage extends Model
{
    public function dessinateur()
    {
        return $this->belongsTo(Dessinateur::class);
    }
}
