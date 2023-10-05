<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Soutenance;
use Illuminate\Http\Request;
use App\Models\Jury;
use App\Models\Etudiant;
use App\Models\Salles;
class SoutenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sout = Soutenance::all();
        return view('Soutenances.soutenance', compact('sout'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $etudiant = Etudiant::all();
        $jury= Jury::all();
        $salle = Salles::all();
        return view('Soutenances.ajout_soutenance', compact('etudiant', 'jury', 'salle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sout = new Soutenance();
        $sout->etudiant = $request->etudiant;
        $sout->date = $request->date;
        $sout->jury = $request->jury;
        $sout->salle = $request->salle;
        $sout->save();

        return redirect()->route('soutenance.create')->with('status', 'La soutenance a bien été programmé.');
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
        $sout = Soutenance::find($id);
        $etudiant = Etudiant::all();
        $jury = Jury::all();
        $salle = Salles::all();
        return view('Soutenances.editsout', compact('sout', 'etudiant', 'jury', 'salle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sout = Soutenance::find($id);
        
        $sout->update([
            'etudiant' => $request->etudiant,
            'date' => $request->date,
            'jury' => $request->jury,
            'salle' => $request->salle,
        ]);
   
     
        return redirect()->route('soutenance.index')->with('status', 'La soutenance a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sout = Soutenance::find($id);
        $sout->delete();
        return redirect()->route('soutenance.index')->with('status', 'La soutenance a été supprimé avec succès.');
    }
}
