@extends('layouts.app')

@section('title1')
    Mise à jour d'un enseignant
@endsection

@section('content')


    <section class="content mb-3">
        <div class="container-fluid">
        <div class="card card-default">
            <div class="card-body">
        <form action="{{ route('enseignant.update' , ['id'=>$data->id] ) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="row">
                <div class="form-group col-md-6" >
                    <label for="exampleInputEmail1">Matricule</label>
                    <input type="text" class="form-control" name="matricule" value="{{ $data->matricule }}" placeholder="Entrez votre matricule">
                </div>
                <div class="form-group col-md-6" >
                    <label for="exampleInputEmail1">Nom</label>
                    <input type="text" class="form-control" name="Nom" value="{{ $data->Nom }}" placeholder="Entrez votre nom">
                </div>
                <div class="form-group col-md-6" >
                    <label for="exampleInputEmail1">Prenom</label>
                    <input type="text" class="form-control" name="Prenom" value="{{ $data->Prenom }}" placeholder="Entrez votre prenom">
                </div>
                <div class="form-group col-md-6 ">
                    <label class="">Sexe</label>
                    <select class="form-control" name="Sexe" value="{{ $data->Sexe }}" style="width: 100%; height: 36px">
                        <option value="Cd">M</option>
                        <option value="DG">F</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group col-md-6" >
                    <label for="exampleInputEmail1">E-mail</label>
                    <input type="email" class="form-control" name="mail"value="{{ $data->mail }}" placeholder="Entrez votre mail">
                </div>
                <div class="form-group col-md-6" >
                    <label for="exampleInputEmail1">Contact:</label>
                    <input type="number" class="form-control" name="Telephone" value="{{ $data->Telephone }}" placeholder="Entrez votre contact">

                </div>
                <div class="form-group col-md-6 " >
                    <label for="exampleInputEmail1">Diplome</label>
                    <input type="text" class="form-control" name="Diplome" value="{{ $data->Diplome }}" aria-describedby="emailHelp" placeholder="Entrez votre diplome">
                </div>
                <div class="form-group col-md-6 ">
                    <label class="">Grade</label>
                    <select class="form-control" name="grade" value="{{ $data->grade }}" style="width: 100%; height: 36px">

                        <option value="Cd">Docteur</option>
                        <option value="DG">Professeur</option>
                        <option value="DG">Maitre Assistant</option>
                        </optgroup>
                    </select>
                </div>

                <div class="form-group col-md-6 ">
                    <label class="">Type</label>
                    <select class="form-control" name="type" value="{{ $data->type }}" style="width: 100%; height: 36px">

                        <option value="Cd">Titulaire</option>
                        <option value="DG">Pas Titulaire</option>
                        </optgroup>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label>Date</label>
                    <input type="date" name="Date" value="{{ $data->Date }}" class="form-control"/>
                </div>

                <div class="form-group col-md-6" >
                    <label for="exampleInputEmail1">Volume horaire confié</label>
                    <input type="number" min="0" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="56">
                </div>

                <div class=" col-md-6">
                    <label for="exampleInputEmail1">Etablissement de rattachement administratif:</label>
                    <input type="text" class="form-control" name="Rattachement" value="{{ $data->Rattachement }}" aria-describedby="emailHelp" placeholder="Etablissement d'origine">
                </div>

                <div class=" col-md-6">
                    <label for="exampleInputEmail1">Abattement :</label>
                    <input type="text" class="form-control" value="{{ $data->abattement }}" name="abattement" aria-describedby="emailHelp" placeholder="IBAM">
                </div>



            </div>


            <div class="form-group col-md-4 my-4">
                <button type="submit" value="Update"  class="btn btn-warning">Mettre à jour</button>
           </div>
            </div>

        </form>

    </section>

@endsection
