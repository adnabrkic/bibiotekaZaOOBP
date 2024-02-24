<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function knjige()
    {
        return $this -> hasMany (Knjige::class, 'autorID');
    }

    protected $fillable = [
        'ime',
        'prezime',
        'drzava',
        'datumRodjenja',
        'biografija',
    ];
}
