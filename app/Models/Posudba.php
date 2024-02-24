<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posudba extends Model
{
    public $timestamps=false;
    use HasFactory;

    protected $fillable = [
        'datumPosudbe',
        'datumVracanja',
        'zakasnina',
        'knjiga',
        'korisnik',
    ];
}
