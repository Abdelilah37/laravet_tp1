@extends('layouts.master')
@section('filiere')
    active
@endsection


@section('content')
    <div class="mt-5 pt-5">
        <h3 class="text-center">Modifier la filiere : <span class="text-success">{{ $filiere->titre }}</span></h3>
        <div class="m-auto w-50 border p-4 ">
            <form action="{{ route('filiers.update', $filiere->id) }}" method="post" class="form m-auto w-50">
                @csrf
                @method('PUT')
                <table>
                    <tr>
                        <th>
                            <label for="titre" class="form-lable"> Titre</label>
                        </th>
                        <td>
                            <input  type="text" name="titre" id="titre" class="form-control"
                                value="{{ $filiere->titre }}">
                        </td>
                    </tr>
                    @error('titre')
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
                            <label for="discription" class="form-lable"> Description</label>
                        </th>
                        <td>
                            <textarea  type="text" name="description" id="discription" class="form-control" rows="3" cols="10"
                                value="">{{ $filiere->description }}</textarea>
                        </td>
                    </tr>
                    @error('description')
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
                                class="btn btn-outline-info"><a href="{{ route('filiers.index') }}"
                                class="btn btn-outline-danger">Retour</a></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection
