<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stagiaire;
use App\Models\Groupe;
class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $stagiaires=Stagiaire::paginate(10);
        return view('stagiaires.indesx',compact('stagiaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $groupes=Groupe::all();
    return view('stagiaires.create',compact('groupes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Stagiaire::create([
            'nom_complet' => $request->nom_complet,
            'genre'=>$request->genre,
            'date_naissance'=>$request->date_naissance,
            'note'=>$request->note,
            'groupe_id'=>$request->groupe_id,
        ]);
        return redirect()->route('stagiaires.index')->with('success','le stagiaire est bien ajouter');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $stagiaire=Stagiaire::find($id);
        return view('stagiaires.show',compact('stagiaire'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $stagiaire=Stagiaire::find($id);
        $groupes=Groupe::all();
        return view('stagiaires.edit',compact('stagiaire','groupes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $stagiaire=Stagiaire::find($id);
        $stagiaire->nom_complet=$request->nom_complet;
        $stagiaire->genre=$request->genre;
        $stagiaire->date_naissance=$request->date_naissance;
        $stagiaire->note=$request->note;
        $stagiaire->groupe_id=$request->groupe_id;
        $stagiaire->save();
        return redirect()->route('stagiaires.index')->with('success','le stagiaire est bien modifier');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Stagiaire::destroy($id);
        return redirect()->route('stagiaires.index')->with('success', 'le stagiaier est bien supprimer');
    }
}
