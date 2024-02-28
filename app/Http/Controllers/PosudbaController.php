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
        //upit 1:knjige i njihova kategorija
        ///$knjigeZanr = DB::table('knjiges')->where('zanr', 'Roman')->get();
        $books_by_category = DB::table('knjiges')
    ->select('kategorijas.ime as category_name', DB::raw('COUNT(knjiges.id) as book_count'))
    ->join('kategorijas', 'knjiges.kategorijaID', '=', 'kategorijas.id')
    ->groupBy('kategorijas.ime')
    ->get();


        //upit 2: knjige sa najvecim brojem kopija
        $najviseKnjiga = DB::table('knjiges')
            ->orderByDesc('dostupneKopije')
            ->limit(10)
            ->get();

        //upit 3: knjige izdane u zadnjih mjesec dana njihovo ime i autor
       /* $from = '2024-2-01 00:00:00';
        $to = '2024-2-31 23:59:59';

        $knjigeIzdane = DB::table('knjiges')
        ->whereBetween('datumIzdavanja', [$from, $to])
        ->count(); */

        $from = '2024-02-01 00:00:00';
        $to = '2024-02-31 23:59:59';

        $knjigeIzdane = DB::table('knjiges')
        ->join('autors', 'knjiges.autorID', '=', 'autors.id')
        ->whereBetween('knjiges.datumIzdavanja', [$from, $to])
        ->select('knjiges.title as naziv_knjige', 'autors.ime as ime_autora', 'autors.prezime as prezime_autora')
        ->get();

        $brojKnjigaIzdanih = $knjigeIzdane->count();




        //upit4:drzave iz kojih su autori
       // $drzave = DB::table('autors')->select('drzava')->distinct()->get();

       /*$knjigeIIzdavaci = DB::table('knjiges')
        ->join('izdavacs', 'knjiges.izdavacID', '=', 'izdavacs.id')
        ->select('knjiges.title', 'izdavacs.ime')
        ->get();*/

        $izdavaci = DB::table('izdavacs')
            ->orderBy('id')
            ->limit(5)
            ->get();

        $knjigePoIzdavacu = [];

        foreach ($izdavaci as $izdavac) {
            $knjige = DB::table('knjiges')
                ->where('izdavacID', $izdavac->id)
                ->get();

            $knjigePoIzdavacu[$izdavac->ime] = $knjige;
        }





        //upit5: imena i prezimena bibliotekara
        $radnici = DB::table('zaposlenicis')->select('ime', 'prezime', 'plata')->get();



        return view('posudbe.index', ['books_by_category' => $books_by_category, 'najviseKnjiga'=>$najviseKnjiga, 'knjigeIzdane'=>$knjigeIzdane, 'radnici'=>$radnici, 'brojKnjigaIzdanih'=>$brojKnjigaIzdanih, 'knjigePoIzdavacu'=>$knjigePoIzdavacu]);
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
