<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    use HasFactory;

    protected $guarded =[

    ];
    function Enseignant (){
        return $this->hasOne(Enseignant::class);
    }
    function Etudiant (){
        return $this->hasOne(Etudiant::class);
    }
}
