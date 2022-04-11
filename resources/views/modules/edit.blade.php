@extends('layouts.app')

@section('title1')
    Mettre à jour les information d'un module
@endsection
@section('title2')
    Generate rapport
@endsection

@section('content')


    <section class="content mb-3">
        <div class="container-fluid">
        <div class="card card-default">
            <div class="card-body">
        <form action="{{ route('module.update', ['id'=>$upmod->id] ) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="row">
                    <div class="form-group col-md-4" >
                        <label for="exampleInputEmail1">Code</label>
                        <input type="text" class="form-control" name="codemod" value="{{ $upmod->codemod }}" placeholder="Entrez le code du module">
                    </div>
                <div class="form-group col-md-4" >
                    <label for="exampleInputEmail1">Libellé</label>
                    <input type="text" class="form-control" name="libmod" id="prenom" value="{{ $upmod->libmod }}" placeholder="Entrez le libellé du module">
                </div>
                <div class="form-group col-md-4" >
                    <label for="exampleInputEmail1">Credit:</label>
                    <input type="number" class="form-control" min="0" value="0" name="credit" id="contact" value="{{ $upmod->credit }}" placeholder="Entrez le credit du module">
                </div>
                <div class="form-group col-md-4" >
                    <label for="exampleInputEmail1">CT:</label>
                    <input type="number" class="form-control" min="0" value="0" name="vh_ct" id="contact" value="{{ $upmod->vh_ct }}" placeholder="Entrez le volume horaire du cours theorique">
                </div>
                <div class="form-group col-md-4" >
                    <label for="exampleInputEmail1">TD:</label>
                    <input type="number" class="form-control" min="0" value="0" name="vh_td" id="contact" value="{{ $upmod->vh_td }}"placeholder="Entrez le volume horaire du travaux dirigés">
                </div>
                <div class="form-group col-md-4" >
                    <label for="exampleInputEmail1">TP:</label>
                    <input type="number" class="form-control" min="0" value="0" name="vh_tp" id="contact"value="{{ $upmod->vh_tp }}"placeholder="Entrez le volume horaire du travaux pratique">

                </div>

                <div class="form-group col-md-4" >
                    <label for="exampleInputEmail1">Poids:</label>
                    <input type="number" class="form-control" min="0" value="0" name="poids" id="contact" value="{{ $upmod->poids }}"placeholder="Entrez le volume horaire total du module">

                </div>
                <div class="form-group col-md-4 ">
                    <label class="">Semestre</label>
                    <select class="form-control" name="semestreMod"  value="{{ $upmod->semestreMod }}" style="width: 100%; height: 36px">
                        <option>Choisir</option>
                        <option>Semestre 1</option>
                        <option>Semestre 2</option>
                        <option>Semestre 3</option>
                        <option>Semestre 4</option>
                        <option>Semestre 5</option>
                        <option>Semestre 6</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group col-md-4 ">
                    <label class="">UE</label>
                    <select class="form-control" name="ueMod"  value="{{ $upmod->ueMod }}" style="width: 100%; height: 36px">
                        <option>Choisir</option>
                        <option>Complexité</option>
                        <option>Langage et communication</option>
                        <option>Algorithme et Programmation</option>
                        <option>Physique</option>
                    </select>
                </div>

                <div class="form-group col-md-4" >
                    <label for="exampleInputEmail1">Enseignant</label>
                    <input type="text" class="form-control" name="enseignantMod" id="prenom" value="{{ $upmod->enseignantMod }}" placeholder="Entrez le nom de l'enseignant">
                </div>


            </div>
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-warning">Mettre à jour</button>
           </div>
            </div>

        </form>

    </section>

@endsection
