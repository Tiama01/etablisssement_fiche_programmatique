@extends('layouts.app')

@section('title1')
    La liste des modules
@endsection
@section('title2')
    Generate rapport
@endsection

@section('content')
<div class="container-fluid">

    <table class="table table-bordered">
        <thead>
        <tr class="table-dark">
            <th scope="col">#</th>
            <th scope="col">Code</th>
            <th scope="col">Libellé</th>
            <th scope="col">Credits</th>
            <th scope="col">CT</th>
            <th scope="col">TD</th>
            <th scope="col">TP</th>
            <th scope="col">poids</th>
            <th scope="col">Semestre</th>
            <th scope="col">UE</th>
            <th scope="col">Enseigant</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($mod as $modul)
                <tr>
                    <th scope="row">{{ $modul ->id}}</th>
                    <td>{{ $modul ->codemod}}</td>
                    <td>{{ $modul ->libmod}}</td>
                    <td>{{ $modul ->credit}}</td>
                    <td>{{ $modul ->vh_ct}}</td>
                    <td>{{ $modul ->vh_td}}</td>
                    <td>{{ $modul ->vh_tp}}</td>
                    <td>{{ $modul ->poids}}</td>
                    <td>{{ $modul ->semestreMod}}</td>
                    <td>{{ $modul ->ueMod}}</td>
                    <td>{{ $modul ->enseignantMod}}</td>
                    <td>
                        <form action="" method="POST">
                            <a class="btn btn-info" href="">Voir</a>
                            <a class="btn btn-primary" href="">Modifier</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>

                        </form>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection
