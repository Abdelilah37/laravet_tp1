@extends('layouts.master')
@section('filiere')
    active
@endsection


@section('content')
    <div class="mt-5 pt-5">
        <h3>leste des filieres : </h3>
        @if (session()->has('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('success')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            @endif
        <a class="text-success" href="{{route('filiers.create')}}">Ajouter filiere</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th></th>

                    <th>Filieres</th>
                    <th>Description</th>
                    <th>nombre groupes</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @isset($filieres)
@foreach ($filieres as $filiere)
<tr>
    <td>{{$filiere->id}}</td>

    <td>{{$filiere->titre}}</td>
    <td>{{$filiere->description}}</td>
    <td>{{count($filiere->groupe)}}</td>
    <td>
        <a href="{{route('filiers.show',$filiere['id'])}}" class="text-info">show</a>
        <a href="{{route('filiers.edit',$filiere['id'])}}" class="text-primary">edit</a>
        <form class="d-inline-block" action="{{route('filiers.destroy',$filiere['id'])}}" method="post">
        @csrf
        @method('delete')
    <input onclick="return confirm('voulez vous supprimer cette filiere')" type="submit" value="delet" class="border border-0 bg-white  text-danger d-inline-block">
    </form>
    </td>
</tr>
@endforeach
                @endisset ()




            </tbody>
        </table>
    </div>
@endsection
