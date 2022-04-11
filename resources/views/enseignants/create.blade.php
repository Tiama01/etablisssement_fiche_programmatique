@extends('layouts.app')

@section('title1')
    Ajout d'un enseignant
@endsection
@section('title2')
    Generate rapport
@endsection

@section('content')


    <section class="content mb-3">
        <div class="container-fluid">
        <div class="card card-default">
            <div class="card-body">
        <form action="{{ route('enseignant.store' ) }}" method="POST">
            {!! csrf_field() !!}
            <div class="row">
                <div class="row">
                <div class="form-group col-md-6" >
                    <label for="exampleInputEmail1">Matricule <label for="" class="text-danger">*</label></label>
                    <input type="text" class="form-control" name="matricule" id="matricule" placeholder="Entrez votre matricule">
                </div>
                <div class="form-group col-md-6" >
                    <label for="exampleInputEmail1">Nom <label for="" class="text-danger">*</label></label>
                    <input type="text" class="form-control" name="Nom" id="name" placeholder="Entrez votre nom">
                </div>
                <div class="form-group col-md-6" >
                    <label for="exampleInputEmail1">Prenom <label for="" class="text-danger">*</label></label>
                    <input type="text" class="form-control" name="Prenom" id="prenom" placeholder="Entrez votre prenom">
                </div>
                <div class="form-group col-md-6 ">
                    <label class="">Sexe</label>
                    <select class="form-control" name="Sexe"  style="width: 100%; height: 36px">
                        <option value="Cd">M</option>
                        <option value="DG">F</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group col-md-6" >
                    <label for="exampleInputEmail1">E-mail <label for="" class="text-danger">*</label></label>
                    <input type="email" class="form-control" name="mail" id="email" placeholder="Entrez votre mail">
                </div>
                <div class="form-group col-md-6" >
                    <label for="exampleInputEmail1">Contact:</label>
                    <input type="number" class="form-control" name="Telephone" id="contact" placeholder="Entrez votre contact">

                </div>
                <div class="form-group col-md-6 " >
                    <label for="exampleInputEmail1">Diplome</label>
                    <input type="text" class="form-control" name="Diplome" id="diplome" aria-describedby="emailHelp" placeholder="Entrez votre diplome">
                </div>
                <div class="form-group col-md-6 ">
                    <label class="">Grade <label for="" class="text-danger">*</label></label>
                    <select class="form-control" name="grade"  style="width: 100%; height: 36px">

                        <option>Docteur</option>
                        <option>Professeur</option>
                        <option>Maitre Assistant</option>
                        <option>Maitre de Conference</option>
                        </optgroup>
                    </select>
                </div>

                <div class="form-group col-md-6 ">
                    <label class="">Type</label>
                    <select class="form-control" name="type"  style="width: 100%; height: 36px">

                        <option value="Cd">Titulaire</option>
                        <option value="DG">Pas Titulaire</option>
                        </optgroup>
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label>Date de Nomination</label>
                    <input type="date" name="Date" class="form-control"/>
                </div>

                <div class="form-group col-md-6" >
                    <label for="exampleInputEmail1">Volume horaire confié</label>
                    <input type="number" min="0" class="form-control" id="exampleInputEmail1" value="30" aria-describedby="emailHelp" placeholder="56">
                </div>

                <div class=" col-md-6">
                    <label for="exampleInputEmail1">Etablissement de rattachement administratif:</label>
                    <input type="text" class="form-control" name="Rattachement"id="Etabliss" aria-describedby="emailHelp" placeholder="Etablissement d'origine">
                </div>

                <div class=" col-md-6">
                    <label for="exampleInputEmail1">Abattement :</label>
                    <input type="number" class="form-control" id="abattement" min ="0"name="abattement" aria-describedby="emailHelp" value="0">
                </div>



            </div>


            <div class="form-group col-md-4 my-4">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
           </div>
            </div>

        </form>

    </section>

@endsection
