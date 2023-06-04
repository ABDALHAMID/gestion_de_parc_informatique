<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
    use HasFactory;

    protected $fillable = [
            'port',
            'mac_address',
            'ip_address',
            'masque_reseau',
            'material'
    ];
}
