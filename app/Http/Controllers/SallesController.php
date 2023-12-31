<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Salles;
class SallesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salle = Salles::all();
        return view('Salle.salle', compact('salle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Salle.ajout_salle');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $salle = new Salles();
        $salle->nom = $request->nom;
        $salle->save();

        return redirect()->route('salle.create')->with('status', 'La salle a bien été ajouté.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
