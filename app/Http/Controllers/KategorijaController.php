<?php

namespace App\Http\Controllers;

use App\Models\Kategorija;
use Illuminate\Http\Request;

class KategorijaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kategorija=DB::table('kategorijas')
        ->get();
        return view('kategorija.index', ['kategorija'=>$kategorija]);
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
    public function show(Kategorija $kategorija)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategorija $kategorija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategorija $kategorija)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategorija $kategorija)
    {
        //
    }
}
