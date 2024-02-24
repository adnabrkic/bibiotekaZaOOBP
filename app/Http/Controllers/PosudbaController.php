<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Posudba;
use App\Models\Knjige;
use App\Models\Autor;
use App\Models\Jezik;
use App\Models\Kategorija;
use App\Models\Polica;
use App\Models\Izdavac;
use Illuminate\Http\Request;


class PosudbaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        //upit 1:knjige koje su romani
        $knjigeZanr = DB::table('knjiges')->where('zanr', 'Roman')->get();

        //upit 2: knjige sa najvecim brojem kopija
        $najviseKnjiga = DB::table('knjiges')
            ->orderByDesc('dostupneKopije')
            ->limit(10)
            ->get();

        //upit 3: knjige izdane u zadnjih mjesec dana
        $from = '2024-2-01 00:00:00';
        $to = '2024-2-31 23:59:59';

        $knjigeIzdane = DB::table('knjiges')
        ->whereBetween('datumIzdavanja', [$from, $to])
        ->count();

        //upit4:drzave iz kojih su autori
        $drzave = DB::table('autors')->select('drzava')->distinct()->get();

        //upit5: imena i prezimena bibliotekara
        $radnici = DB::table('zaposlenicis')->select('ime', 'prezime', 'plata')->get();



        return view('posudbe.index', ['knjigeZanr' => $knjigeZanr, 'najviseKnjiga'=>$najviseKnjiga, 'knjigeIzdane'=>$knjigeIzdane, 'drzave' => $drzave, 'radnici'=>$radnici]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Posudba $posudba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posudba $posudba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Posudba $posudba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posudba $posudba)
    {
        //
    }
}
