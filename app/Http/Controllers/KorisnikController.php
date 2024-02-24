<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Korisnik;

class KorisnikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Korisnik::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        return Korisnik::create($request ->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Korisnik::find($id);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $korisnik = Korisnik::find($id);
        $korisnik -> update($request->all());
        return $korisnik;
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Korisnik::destroy($id);
        //
    }
}
