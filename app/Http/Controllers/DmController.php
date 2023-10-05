<?php

namespace App\Http\Controllers;
use App\Models\Dm;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dm = Dm::all();
        return view('Dm.dm', compact('dm'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dm.ajout_dm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dm = new Dm();
        $dm->nom = $request->nom;
        $dm->prenom = $request->prenom;
        $dm->sexe = $request->sexe;
        $dm->contact = $request->contact;
        $dm->save();

        return redirect()->route('dm.create')->with('status', 'Le DM a bien été ajouté.');
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
        $dm = Dm::find($id);
        return view('Dm.editdm', compact('dm'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dm = Dm::find($id);
        
        $dm->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'sexe' => $request->sexe,
            'contact' => $request->contact,
        ]);
   
     
        return redirect()->route('dm.index')->with('status', 'La Directeur de Mémoire a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dm = Dm::find($id);
        $dm->delete();
        return redirect()->route('dm.index')->with('status', 'Le Directeur de Mémoire a été supprimé avec succès.');
    }
}
