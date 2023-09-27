<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Request\login;
use illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function acceuil()
    {
        return view('welcome');
    }

    
    public function login(Request $request)
    {
        if(Auth::attempt(['username'=>$request->username, 'password'=>$request->password])){
            return view('dashboard');
        }
        return view('welcome')->with('status', 'Identifiant ou mot de passe incorect');
    }

    public function logout()
    {
        Auth::logout();
        return view('welcome');
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
