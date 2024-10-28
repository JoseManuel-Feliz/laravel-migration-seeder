<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    protected $fillabile = [
        'azienda',
        'satzione_partenza',
        'stazione_arrivo',
        'orario_partenza',
        'orario_arrivo',
        'codice_treno',
        'numero_carroze',
        'in_orario',
        'cancellato'
    ];
}
