@extends('layouts.master')
@section('groupe')
    active
@endsection


@section('content')
    <div class="mt-5 pt-5">
        <h3 class="text-center">Modifier le groupe  : <span class="text-success">{{$groupe->libelle}}</span></h3>
        <div class="m-auto w-50 border p-4 ">
            <form action="{{ route('groupes.update',$groupe->id) }}" method="post" class="form m-auto w-50">
                @csrf
                @method('PUT')
                <table>
                    <tr>
                        <th>
                            <label for="titre" class="form-lable"> Libelle</label>
                        </th>
                        <td>
                            <input  type="text" name="libelle" value="{{$groupe->libelle}}" id="libelle" class="form-control">
                        </td>
                    </tr>
                    @error('libelle')
                    <tr>
                        <td colspan="2">
                            <p class="text-center">
                                <i class="text-danger">{{ $message }}</i>
                            </p>
                        </td>
                    </tr>
                @enderror
                    <tr>
                        <th>
                            <label for="discription" class="form-lable"> Filier</label>
                        </th>
                        <td>
                            <select name="filiere_id" id="" class="form-control" >

                                @foreach ($filieres as $filiere)
                                <option @if ($filiere->id == $groupe->filiere_id) selected

                                @endif value="{{$filiere->id}}">{{$filiere->titre}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    @error('filiere_id')
                        <tr>
                            <td colspan="2">
                                <p class="text-center">
                                    <i class="text-danger">{{ $message }}</i>
                                </p>
                            </td>
                        </tr>
                    @enderror
                    <tr>
                        <td></td>
                        <td class="d-flex justify-content-between mt-4"><input type="submit" value="Modifier"
                                class="btn btn-outline-info"><a href="{{ route('groupes.index') }}"
                                class="btn btn-outline-danger">Retour</a></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection
