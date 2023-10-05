<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $guarded =[

    ];
    function Enseignant (){
        return $this->hasOne(Enseignant::class);
    }
    
    function Demande (){
        return $this->hasOne(Demande::class);
    }
}
