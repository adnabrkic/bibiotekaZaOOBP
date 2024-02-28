<?php

namespace App\Http\Controllers;
use DB;


use App\Models\Knjige;
use App\Models\Autor;
use App\Models\Jezik;
use App\Models\Kategorija;
use App\Models\Polica;
use App\Models\Izdavac;
use Illuminate\Http\Request;

class KnjigeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $knjige = DB::table('knjiges')->get();

        return view('knjige.index', ['knjige' => $knjige]);

        //
    }

    public function file_add(Request $request)
{
    // Dohvati ID knjige iz podataka poslanih putem POST zahtjeva
    $knjigaId = $request->input('id');

    // Prikupi podatke o knjizi na temelju ID-a
    $knjiga = Knjige::find($knjigaId);

    // Proslijedi podatke o knjizi na pogled
    return view('knjige.file_add', ['knjiga' => $knjiga]);
}

public function process (Request $request)
    {
        $id=$request->id;

        $knjige=Knjige::find($id);
        $folder_to_save = $knjige->code;
        $file=$request->file('file');
        $filename=$knjige->id . time() . '.' . $file->getClientOriginalExtension();
        $path = $file ->storeAs($folder_to_save, $filename);

        return redirect()->route('knjige');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       

        $autor=Autor::all();
        $jezik=Jezik::all();
        $kategorija=Kategorija::all();
        $polica=Polica::all();
        $izdavac=Izdavac::all();
        return view('knjige.dodaj', ['autor'=>$autor, 'jezik'=>$jezik, 'kategorija'=>$kategorija, 'polica'=>$polica, 'izdavac'=>$izdavac]);

        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        DB::table('knjiges')->insert([
            'title' => $request -> title,
            'zanr' => $request -> zanr,
            'datumIzdavanja' => $request ->datumIzdavanja,
            'opis' => $request -> opis,
            'ISBN' => $request -> ISBN,
            'dostupneKopije' => $request -> dostupneKopije,
            'autorID' => $request -> autorID,
            'kategorijaID' => $request -> kategorijaID,
            'jezikID'  => $request -> jezikID,
            'izdavacID'  => $request -> izdavacID,
            'policaID' => $request -> policaID,
            'prosjecnaOcjena'  => $request -> prosjecnaOcjena,
        ]);

        $autor = Autor::where('ime', $request->ime)
                  ->where('prezime', $request->prezime)
                  ->first();

            // Ako autor ne postoji, stvorite novi unos autora
        if (!$autor) {
            $autor = new Autor();
            $autor->ime = $request->ime;
            $autor->prezime = $request->prezime;
        // dodajte ostale informacije o autoru ako je potrebno
            $autor->save();
        }


        return redirect() -> route('knjige');
        //
    }

    public function delete (Request $request)
    {
        $id=$request->id;
        Knjige::destroy($id);
        return redirect()->route('knjige');
    }

    /**
     * Display the specified resource.
     */
    public function show(Knjige $knjige)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $id=$request->id;

        $knjige=DB::table('knjiges')->where('id', $id)->get();

        $autor = DB::table('autors')->get();

        $jezik = DB::table('jeziks')->get();

        $kategorija = DB::table('kategorijas')->get();

        $polica= DB::table('policas')->get();

        $izdavac = DB::table('izdavacs')->get();

        return view('knjige.uredi', ['knjige' => $knjige, 'autor'=>$autor, 'jezik'=>$jezik, 'kategorija'=>$kategorija, 'polica'=>$polica, 'izdavac'=>$izdavac]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id=$request->id;

        $request->validate([
            'title' => 'required|string|max:255',
            'zanr' => 'required|string|max:255',
        ]);

        $update_query = DB::table('knjiges')->where('id', $id)->update([
            'title' => $request -> title,
            'zanr' => $request -> zanr,
            'datumIzdavanja' => $request ->datumIzdavanja,
            'dostupneKopije' => $request -> dostupneKopije,
            'opis' => $request -> opis,
        ]);
        return redirect() -> route('knjige');

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Knjige $knjige)
    {
        //
    }
}



