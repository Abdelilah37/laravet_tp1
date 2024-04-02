@extends('layouts.master')
@section('stagiaire')
    active
@endsection


@section('content')
    <div class="mt-5 pt-5">
        <h3>Detailes de stagiare <span class="text-info">{{$stagiaire->nom_complet}}</span> </h3>
        <a class="text-danger" href="{{route('stagiaires.index')}}">Retoure</a>
        <table class="table table-hover table-bordered">
            <tr>
                <th>Nom complet</th>
                <td>{{$stagiaire->nom_complet}}</td>
            </tr>

            <tr>
                <th>Genre</th>
                <td>{{$stagiaire->genre}}</td>
            </tr>

            <tr>
                <th>Date de naissance</th>
                <td>{{$stagiaire->date_naissance}}</td>
            </tr>
            <tr>
                <th>Note</th>
                <td>{{$stagiaire->note}}</td>
            </tr>
            <tr>
                <th>Groupe</th>
                <td>{{$stagiaire->groupe->libelle}}</td>
            </tr>
        </table>
    </div>
@endsection
