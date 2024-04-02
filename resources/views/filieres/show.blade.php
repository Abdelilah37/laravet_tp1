@extends('layouts.master')
@section('filiere')
    active
@endsection


@section('content')
    <div class="mt-5 pt-5">
        <h3>nom de la filier : <span class="text-success">{{$filiere->titre}}</span></h3>
        <h4 class="text-center">liste des groupes de la filiere <span><b class="text-warning ">{{$filiere->titre}}</b></span></h4>
        <a href="{{route('filiers.index')}}" class="text-danger">Retouer</a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>

                    <th>Groupes</th>


                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($filiere->groupe as $groupe)
                <tr>
                    <td>{{$groupe->id}}</td>
                    <td>{{$groupe->libelle}}</td>
                    <td>
                        <a class="text-primary" href="{{route('groupes.show',$groupe->id)}}">show</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
