<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Filiere;
use App\Http\Requests\FiliereRequest;


class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filieres=Filiere::with('groupe')->get();
        return view('filieres.indesx',compact('filieres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('filieres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FiliereRequest $request)
    {
        //
        $filier=Filiere::create([
            'titre'=>$request->titre,
            'description'=>$request->description
        ]);
        $message='filier est bien ajouter';
        return redirect()->route('filiers.index')->with('success', $message);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $filiere=Filiere::find($id);
        return view('filieres.show',compact('filiere'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $filiere=Filiere::find($id);
        return view('filieres.edit',compact('filiere'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FiliereRequest $request, string $id)
    {
        //
        $filiere=Filiere::find($id);
        $filiere->titre=$request->titre;
        $filiere->description=$request->description;
        $filiere->save();
        return redirect()->route('filiers.index')->with('success','Filier est bien modifierie');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Filiere::destroy($id);
        return redirect()->route('filiers.index')->with('success','Filier est bien supprimer');
    }
}
