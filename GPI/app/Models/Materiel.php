<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    use HasFactory;

    public function materielType()
    {
        return $this->belongsTo(MaterielType::class , 'materiel_type', 'id');
    }

    public function materielMarque()
    {
        return $this->belongsTo(Marque::class, 'marque', 'id');
    }

    public function materielModèle()
    {
        return $this->belongsTo(Modèle::class, 'modèle', 'id');
    }

    public function materielAffectation()
    {
        return $this->belongsTo(Division::class, 'affectation', 'id');
    }

    public function ports(){
        return $this->hasMany(Port::class, 'material', 'id');
    }

    protected $fillable = [
            'materiel_type',
            'marque',
            'modèle',
            'N_serie',
            'N_Inventair',
            'affectation',
            'caractéristiques',
            'date_aqusition',
            'état'
    ];
}
