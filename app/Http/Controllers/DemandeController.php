<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Demandes;
use App\Models\Etudiant;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $demande = Demandes::all();
        return view('Demande.demande', compact('demande'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $etudiant = Etudiant::all();
        return view('Demande.ajout_demande');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $demande = new Demandes();
        $demande->nom_etudiant = $request->nom_etudiant;
        $demande->periode = $request->periode;
        $demande->statut = $request->statut;
        $demande->save();

        return redirect()->route('demande.create')->with('status', 'La demande a bien été ajouté.');
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
        $demande = Demandes::find($id);
        return view('Demandes.editd', compact('demande'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $demande = Demandes::find($id);
        
        $demande->update([
            'nom_etudiant' => $request->nom_etudiant,
            'periode' => $request->periode,
            'statut' => $request->statut,
        ]);
   
     
        return redirect()->route('demande.index')->with('status', 'La demande a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $demande = Demandes::find($id);
        $demande->delete();
        return redirect()->route('demande.index')->with('status', 'La demande a été supprimé avec succès.');
    }
}
