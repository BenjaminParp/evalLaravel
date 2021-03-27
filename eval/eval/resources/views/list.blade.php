@extends('layouts.base')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/style.css')}}">
@endsection

@section('title', 'Livres')

@section('content')
<h1 class="title">Liste des livres</h1>

<div class="list">
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Année de création</th>
                <th scope="col">Bande déssinée</th>
                <th scope="col">Déssinateur</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($personnages as $personnage)
            <tr>
                <td>{{ $personnage->nom }}</td>
                <td>{{ $personnage->année_de_création }}</td>
                <td>{{ $personnage->nom_de_bd }}</td>
                <td>{{ $personnage->déssinateur }}</td>
                <td>
                <td>
                    <a href="/majPersonnage/{{ $personnage->id }}" class="btn btn-success"></a>

                </td>
                    <form action="/supprPersonnage" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $personnage->id }}">
                        <input type="submit" class="btn btn-danger" value="X">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
