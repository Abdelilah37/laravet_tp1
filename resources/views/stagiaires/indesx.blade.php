@extends('layouts.master')
@section('stagiaire')
    active
@endsection


@section('content')
    <div class="mt-5 pt-5">
        <h3>leste des stagiaires : </h3>
        @if (session()->has('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('success')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            @endif
        <a class="text-success" href="{{route('stagiaires.create')}}">Ajouter stagiaire</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th></th>

                    <th>Nom complet</th>
                    
                    <th>Date de naissance</th>

                    <th>Groupe</th>
                </tr>
            </thead>
            <tbody>
                @isset($stagiaires)
@foreach ($stagiaires as $stagiaire)
<tr>
    <td>{{$stagiaire->id}}</td>

    <td>{{$stagiaire->nom_complet}}</td>

    <td>{{$stagiaire->date_naissance}}</td>

    <td>{{$stagiaire->groupe->libelle}}</td>
    <td>
        <a href="{{route('stagiaires.show',$stagiaire['id'])}}" class="text-info">show</a>
        <a href="{{route('stagiaires.edit',$stagiaire['id'])}}" class="text-primary">edit</a>
        <form class="d-inline-block" action="{{route('stagiaires.destroy',$stagiaire['id'])}}" method="post">
        @csrf
        @method('delete')
    <input type="submit" value="delet" class="border border-0 bg-white  text-danger d-inline-block">
    </form>
    </td>
</tr>
@endforeach
                @endisset ()




            </tbody>
        </table>
        {{$stagiaires->links()}}
    </div>
@endsection
