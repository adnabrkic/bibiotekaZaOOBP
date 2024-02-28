<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Izdavac extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function knjige()
    {
        return $this -> hasMany (Knjige::class, 'izdavacID');
    }

    protected $fillable = [
        'ime',
        'adresa',
        'brojTelefona',
        'webAdresa',
    ];
}
