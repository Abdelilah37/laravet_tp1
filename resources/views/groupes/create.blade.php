@extends('layouts.master')
@section('groupe')
    active
@endsection


@section('content')
    <div class="mt-5 pt-5">
        <h3>Ajouter un novaux groupe : </h3>

        <div class="m-auto w-50 border p-4 ">
            <form action="{{ route('groupes.store') }}" method="post" class="form m-auto w-50">
                @csrf
                <table>
                    <tr>
                        <th>
                            <label for="titre" class="form-lable"> Libelle</label>
                        </th>
                        <td>
                            <input required type="text" name="libelle" id="libelle" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th>
                            <label for="discription" class="form-lable"> Filier</label>
                        </th>
                        <td>
                            <select name="filiere_id" id="" class="form-control">
                                <option selected>Coisair la filiere</option>
                                @foreach ($filieres as $filiere)
                                <option value="{{$filiere->id}}">{{$filiere->titre}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="d-flex justify-content-between mt-4"><input type="submit" value="Ajouter"
                                class="btn btn-outline-info"><a href="{{ route('groupes.index') }}"
                                class="btn btn-outline-danger">Retour</a></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection
