@extends('app')

@section('title', 'listes candidatures')


@section('content')

    <h1>Section Listes</h1>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Intitule du poste</th>
            <th scope="col">Nom compagny</th>
            <th scope="col">Tel campagny</th>
            <th scope="col">Description du poste</th>
            <th scope="col">Requis poste</th>
            <th scope="col">Date postulation</th>
            </tr>
        </thead>
        <tbody>

        @forelse($candidatures as $candidature)
            <tr>
                <th scope="row">{{ ucfirst($candidature->id) }}</th>
                <td>{{ ucfirst($candidature->poste) }}</td>
                <td>{{ ucfirst($candidature->companyName) }}</td>
                <td>{{ ucfirst($candidature->contactCampany) }}</td>
                <td>{{ ucfirst($candidature->description) }}</td>
                <td>{{ ucfirst($candidature->requisPoste) }}</td>
                <td>{{ ucfirst($candidature->datePostulation) }}</td>
            </tr>
        @empty
            <p class="text-warning">Aucun candidature disponible </p>
        @endforelse
        </tbody>
    </table>
    {{$candidatures}}

@endsection