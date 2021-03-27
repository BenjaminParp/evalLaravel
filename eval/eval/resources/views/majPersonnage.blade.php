@extends('layouts.base')
@section('title', 'MAJ')
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
@endsection

@section('content')
    <h1 class="nom">Mettre à jour le personnage : {{ $personnage->nom }} </h1>
    <div>
        <form action="/majPersonnage" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $personnage->id }}">
            <div>
                <label for="nom" class="col-sm-4 col-form-label">Nom</label>
                <div>
                    <input type="text" class="form-control" name="nom" placeholder="Titre" value="{{ $book->nom }}">
                </div>
            </div>
            <div>
                <label for="dessinateur" class="col-sm-4 col-form-label">Déssinateur</label>
                <div>
                    <select name="dessinateur_id" id="">
                        @foreach ($dessinateurs as $dessinateur)
                        <option value="{{ $dessinateur->id }}">{{ $dessinateur->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div>
                <label for="année_de_création" class="col-sm-4 col-form-label">Année de création</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" name="année_de_création" placeholder="Année de création" value="{{ $personnage->année_de_création }}">
                </div>
            </div>
            <div>
                <label for="nom_de_bd" class="col-sm-4 col-form-label">Nom de la bd</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" name="nom_de_bd" placeholder="Nom de la bd" value="{{ $book->nom_de_bd }}">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Mettre à jour !</button>
            </div>
        </form>
    </div>
@endsection