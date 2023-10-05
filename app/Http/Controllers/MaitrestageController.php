<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Maitrestage;
use Illuminate\Http\Request;

class MaitrestageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ms = Maitrestage::all();
        return view('MS.ms', compact('ms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Ms.ajout_ms');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ms = new Maitrestage();
        $ms->nom = $request->nom;
        $ms->prenom = $request->prenom;
        $ms->sexe = $request->sexe;
        $ms->contact = $request->contact;
        $ms->save();

        return redirect()->route('ms.create')->with('status', 'Le Maitre de Stage a bien été ajouté.');
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
        $ms = Maitrestage::find($id);
        return view('Ms.editms', compact('ms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ms = Maitrestage::find($id);
        
        $ms->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'sexe'=> $request->sexe,
            'contact' => $request->contact,
        ]);
   
        return redirect()->route('ms.index')->with('status', 'Le Maitre de Stage a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ms = Maitrestage::find($id);
        $ms->delete();
        return redirect()->route('ms.index')->with('status', 'Le Maitre de Stage a été supprimé avec succès.');
    }
}
