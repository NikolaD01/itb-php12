<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all():

        return view('film.create', compact('genres'));
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
    public function show(Film $film)
    {
        // ideja je da sort zanrova bude po abcedi:
        $zanrovi = $film->genres; // OVO VRACA KOLEKCIJU moe odmah da se koristi za prolazak
        $upit = $film->genres(); // ovo vraca upit
        $zanrovi2 = $upit->get(); // tek sada iamte kolikciju za prolaz

        $zanroviSort = $film->genres->sortBy('name'); // dozovoljneno da se navede vestacki atribut
        $upit = $film->genres()->orderBy('name'); //Ovo ne moz jer nema u bazi
        $upit = $film->genres()->orderBy('name_en')->get();
        

        return view('film.show',['film'=>$film]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Film $film)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Film $film)
    {
        //
    }
}
