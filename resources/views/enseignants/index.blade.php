    @extends('layouts.app')

@section('title1')
    La liste des enseigants
@endsection
@section('title2')

    Generate rapport
@endsection

@section('content')
<div class="wrapper">


<div class="container-fluid vertical-scrollable">

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

                        <form action="{{ route('enseignant.delete', ['id'=>$enseignants->id]) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('enseignant.show', ['id'=>$enseignants->id]) }}">Voir</a>
                            <a class="btn btn-primary" href="{{ route('enseignant.edit', ['id'=>$enseignants->id]) }}">Modifier</a>
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
</div>
@endsection
