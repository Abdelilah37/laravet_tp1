@extends('layouts.master')
@section('stagiaire')
    active
@endsection


@section('content')
    <div class="mt-5 pt-5">
        <h3>Ajouter un novaux stagiaire : </h3>

        <div class="m-auto w-50 border p-4 ">
            <form action="{{ route('stagiaires.store') }}" method="post" class="form m-auto w-50">
                @csrf
                <table>
                    <tr>
                        <th>
                            <label for="nom_complet" class="form-lable"> Nom complet</label>
                        </th>
                        <td>
                            <input required type="text" name="nom_complet" id="nom_complet" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th>
                            <label for="genre" class="form-lable"> Genre</label>
                        </th>
                        <td>
                            <select required type="text" name="genre" id="gener" class="form-control">
                                <option value="M">Masculin</option>
                                <option value="F">Fiminin</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th>
                            <label for="dateNaissance" class="form-lable"> Date de naissance</label>
                        </th>
                        <td>
                            <input required type="date" name="date_naissance" id="dateNaissance" class="form-control">
                        </td>
                    </tr>

                    <tr>
                        <th>
                            <label for="note" class="form-lable"> Note</label>
                        </th>
                        <td>
                            <input required type="number" name="note" id="note" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label for="discription" class="form-lable"> groupe</label>
                        </th>
                        <td>
                            <select name="groupe_id" id="" class="form-control">
                                <option selected>Coisair le groupe</option>
                                @foreach ($groupes as $groupe)
                                <option value="{{$groupe->id}}">{{$groupe->libelle}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="d-flex justify-content-between mt-4"><input type="submit" value="Ajouter"
                                class="btn btn-outline-info"><a href="{{ route('stagiaires.index') }}"
                                class="btn btn-outline-danger">Retour</a></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection
