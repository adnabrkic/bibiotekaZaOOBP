<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zaposlenici extends Model
{
    public $timestamps=false;
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'email',
        'adresa',
        'brojTelefona',
        'posao',
        'plata',
        'datumZaposlenja',
    ];
}
