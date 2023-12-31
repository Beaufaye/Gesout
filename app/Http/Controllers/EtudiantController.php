<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Etudiant;
class etudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiant = Etudiant::all();
        return view('Etudiants.etudiant', compact('etudiant'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Etudiants.ajout_etudiant');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->sexe = $request->sexe;
        $etudiant->filiere = $request->filiere;
        $etudiant->contact = $request->contact;
        $etudiant->save();

        return redirect()->route('etudiant.create')->with('status', 'Etudiant a bien été ajouté.');
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
        $etudiant = Etudiant::find($id);
        return view('Etudiants.edit', compact('etudiant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $etudiant = Etudiant::find($id);
        
        $etudiant->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'sexe' => $request->sexe,
            'filiere' => $request->filiere,
            'contact' => $request->contact,
        ]);
   
     
        return redirect()->route('etudiant.index')->with('status', 'Etudiant a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect()->route('etudiant.index')->with('status', 'Etudiant a été supprimé avec succès.');
    }
}
