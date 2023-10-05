<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Maitrestage;
use App\Models\Dm;
use App\Models\Jury;
use App\Models\Salles;
class JuryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jury = Jury::all();
        return view('Jury.jury', compact('jury'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $dm = Dm::all();
        $ms = Maitrestage::all();
        return view('Jury.ajout_jury', compact('dm', 'ms',));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jury = new Jury();
        $jury->president_jury = $request->president_jury;
        $jury->nom_dm = $request->nom_dm;
        $jury->nom_ms = $request->nom_ms;
        $jury->save();

        return redirect()->route('jury.create')->with('status', 'Le Jury a bien été formé.');
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
        $jury = Jury::all();
        return view('Jury.editj', compact('jury'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $jury = Jury::find($id);
        
        $jury->update([
            'president_jury' => $request->president_jury,
            'nom_dm' => $request->nom_dm,
            'nom_ms'=> $request->nom_ms,
        ]);
   
        return redirect()->route('jury.index')->with('status', 'Le Jury a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jury = Jury::find($id);
        $jury->delete();
        return redirect()->route('jury.index')->with('status', 'Le Jury a été supprimé avec succès.');
    }
}
