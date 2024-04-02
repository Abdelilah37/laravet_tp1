@extends('layouts.master')
@section('groupe')
    active
@endsection


@section('content')
    <div class="mt-5 pt-5">
        <h3>nom de le groupe : <span class="text-success">{{$groupe->libelle}}</span> dons la filiere <span class="text-info">{{$groupe->filiere->titre}}</span></h3>
        <h4 class="text-center">liste des stagiaires de le groupe <span><b class="text-warning ">{{$groupe->libelle}}</b></span></h4>
        <a href="{{route('groupes.index')}}" class="text-danger">Retouer</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>

                    <th>Stagiaires</th>


                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($groupe->stagiaire as $stagiaire)
                <tr>
                    <td>{{$stagiaire->id}}</td>
                    <td>{{$stagiaire->nom_complet}}</td>
                    <td>
                        <a class="text-primary" href="{{route("stagiaires.show",$stagiaire->id)}}">show</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
