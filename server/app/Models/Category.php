<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_categorie';

    protected $fillable = [
        'nom_categorie'
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'categorie_id');
    }
}
