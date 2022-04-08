    @extends('layouts.app')

@section('title1')
    La liste des enseigants
@endsection
@section('title2')

    Generate rapport
@endsection

@section('content')
<div class="container-fluid">

    <table class="table table-bordered">
        <thead>
        <tr class="table-dark">
            <th scope="col">Matricule</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom(s)</th>
            <th scope="col">E-mail</th>
            <th scope="col">Contact</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($prof as $enseignants)
                <tr>
                    <th scope="row">{{ $enseignants ->matricule}}</th>
                    <td>{{ $enseignants ->Nom}}</td>
                    <td>{{ $enseignants ->Prenom}}</td>
                    <td>{{ $enseignants ->mail}}</td>
                    <td>{{ $enseignants ->Telephone}}</td>
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
