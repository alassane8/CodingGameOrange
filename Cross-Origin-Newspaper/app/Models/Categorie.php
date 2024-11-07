<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',  // Exemple : Nom de la catégorie
        'description',
    ];
    
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
