@extends('layouts.master')
@section('groupe')
    active
@endsection


@section('content')
    <div class="mt-5 pt-5">
        <h3>leste des groupes : </h3>
        @if (session()->has('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session('success')}}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
            @endif
        <a class="text-success" href="{{route('groupes.create')}}">Ajouter groupe</a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th></th>

                    <th>Groupes</th>
                    <th>Filier</th>
                    <th>nombre Stagiaires</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @isset($groupes)
@foreach ($groupes as $groupe)
<tr>
    <td>{{$groupe->id}}</td>

    <td>{{$groupe->libelle}}</td>
    <td>{{$groupe->filiere->titre}}</td>
    <td>{{count($groupe->stagiaire)}}</td>
    <td>
        <a href="{{route('groupes.show',$groupe['id'])}}" class="text-info">show</a>
        <a href="{{route('groupes.edit',$groupe['id'])}}" class="text-primary">edit</a>
        <form class="d-inline-block" action="{{route('groupes.destroy',$groupe['id'])}}" method="post">
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
        {{$groupes->links()}}
    </div>
@endsection
