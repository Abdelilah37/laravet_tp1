<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Groupe;
use App\Models\Filiere;

class GroupeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $groupes=Groupe::paginate(10);
        return view('groupes.indesx', compact('groupes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $filieres=Filiere::all();
        return view('groupes.create',compact('filieres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Groupe::create([
            'libelle'=>$request->libelle,
            'filiere_id'=>$request->filiere_id,
        ]);
        return redirect()->route('groupes.index')->with('success','Groupe est bien ajouter');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $groupe=Groupe::find($id);
        return view('groupes.show',compact('groupe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $filieres=Filiere::all();
        $groupe=Groupe::find($id);
        return view('groupes.edit',compact('groupe','filieres'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $groupe=Groupe::find($id);
        $groupe->libelle=$request->libelle;
        $groupe->filiere_id=$request->filiere_id;
        $groupe->save();
        return redirect()->route('groupes.index')->with('success','le groupe est bien modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Groupe::destroy($id);
        return redirect()->route('groupes.index')->with('success','le groupe est bien supprimer');
    }
}
