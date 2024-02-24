<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Knjige extends Model
{
    public $timestamps=false;
    use HasFactory;

    public function autor() {
        
        return $this->belongsTo(Autor::class, 'autorID');
    }

    public function jezik() {
        return $this->belongsTo(Jezik::class, 'jezikID');
    }

    public function kategorija() {
        return $this->belongsTo(Kategorija::class, 'kategorijaID');
    }

    public function polica() {
        return $this->belongsTo(Polica::class, 'policaID');
    }

    public function izdavac() {
        return $this->belongsTo(Izdavac::class, 'izdavacID');
    }

    

    /**
     * 
     * @var string[]
     */
    protected $fillable= [
        'autorID',
        'title',
        'ISBN',
        'kategorijaID',
        'zanr',
        'datumIzdavanja',
        'opis',
        'jezikID',
        'izdavacID',
        'dostupneKopije',
        'prosjecnaOcjena',
        'policaID',
    ];
}
