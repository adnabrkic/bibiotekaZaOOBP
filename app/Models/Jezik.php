<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jezik extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function knjige()
    {
        return $this -> hasMany (Knjige::class, 'jezikID');
    }

    protected $fillable = [
        'ime',
        'sifra',
    ];
}
