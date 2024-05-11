<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categorie;
use App\Models\User;

class Annonce extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'titre',
        'image',
        'description',
        'localisation',
        'nbreChambres',
        'nbreBains',
        'surface',
        'prix',
        'id_categorie',
        'id_user'
    ];

    public function categorie(){
        return $this->belongsTo(Categorie::class,'id_categorie');
    }

    public function user(){
        return $this->belongsTo(User::class,'id_user');
    }


}
