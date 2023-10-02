<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enseignant;

class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enseignant = Enseignant::all();
        return view('Enseignants.enseignant', compact('enseignant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Enseignants.ajout_enseignant');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $enseignant = new Enseignant();
        $enseignant->nom = $request->nom;
        $enseignant->prenom = $request->prenom;
        $enseignant->sexe = $request->sexe;
        $enseignant->contact = $request->contact;
        $enseignant->save();

        return redirect()->route('enseignant.create')->with('status', 'Enseignant a bien été ajouté.');
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
