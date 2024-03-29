<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
    protected $table = 'Port'; // nom de la table dans la base de données

    protected $fillable = ['id', 'nom']; // colonnes pouvant être mass-assignées

    // si vous utilisez des noms de colonnes différents de ceux par défaut, vous pouvez les définir ici
    // protected $primaryKey = 'id';
    // public $timestamps = true;
}
