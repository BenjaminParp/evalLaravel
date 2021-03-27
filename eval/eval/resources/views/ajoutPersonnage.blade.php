@extends('layouts.base')
@section('title', 'Ajout')
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/ajout.css') }}">
@endsection

@section('content')
    <h1 class="title">Ajouter un personnage</h1>
    <div>
        <form action="/ajoutPersonnage" method="POST">
            @csrf
            <div >
                <label for="nom">Nom</label>
                <div >
                    <input type="text" name="nom" placeholder="Nom" value="">
                </div>
            </div>
            <div>
                <label for="déssinateur">Dessinateur</label>
                <div>
                        <input type="text" name="déssinateur" placeholder="Dessinateur" value="">
                </div>
            </div>
            <div>
                <label for="année_de_création">Année de création</label>
                <div>
                    <input type="text" name="année_de_création" placeholder="Année" value="">
                </div>
            </div>
            <div>
                <label for="nom_de_bd">Nom de la bd du personnage</label>
                <div>
                    <input type="text" name="nom_de_bd" placeholder="Nom de la bd du héro" value="">
                </div>
            </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Ajouter le personnage !</button>
            </div>
        </form>
    </div>
@endsection