@extends('layouts.app')

@section('title1')
    Ajout d'un module
@endsection
@section('title2')
    Generate rapport
@endsection

@section('content')


    <section class="content mb-3">
        <div class="container-fluid">
        <div class="card card-default">
            <div class="card-body">
        <form action="{{ route('module.store' ) }}" method="POST">
            {!! csrf_field() !!}
            <div class="row">
                <div class="row">
                <div class="form-group col-md-4 ">
                    <label class="">Code</label>
                    <select class="form-select" name="codemod"  style="width: 100%; height: 36px">
                        <option>Select</option>
                        <option value="Cd">CA</option>
                        <option value="DG">IPV6</option>
                        <option value="DG">Proba</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group col-md-4" >
                    <label for="exampleInputEmail1">Libellé</label>
                    <input type="text" class="form-control" name="libmod" id="prenom" placeholder="Entrez le libellé du module">
                </div>
                <div class="form-group col-md-4" >
                    <label for="exampleInputEmail1">Credit:</label>
                    <input type="number" class="form-control" min="0" value="0" name="creditmod" id="contact" placeholder="Entrez le credit du module">
                </div>
                <div class="form-group col-md-4" >
                    <label for="exampleInputEmail1">CT:</label>
                    <input type="number" class="form-control" min="0" value="0" name="vh_ct" id="contact" placeholder="Entrez le volume horaire du cours theorique">
                </div>
                <div class="form-group col-md-4" >
                    <label for="exampleInputEmail1">TD:</label>
                    <input type="number" class="form-control" min="0" value="0" name="vh_td" id="contact" placeholder="Entrez le volume horaire du travaux dirigés">
                </div>
                <div class="form-group col-md-4" >
                    <label for="exampleInputEmail1">TP:</label>
                    <input type="number" class="form-control" min="0" value="0" name="vh_tp" id="contact" placeholder="Entrez le volume horaire du travaux pratique">

                </div>

                <div class="form-group col-md-4" >
                    <label for="exampleInputEmail1">Poids:</label>
                    <input type="number" class="form-control" min="0" value="0" name="poids" id="contact" placeholder="Entrez le volume horaire total du module">

                </div>
                <div class="form-group col-md-4 ">
                    <label class="">Semestre</label>
                    <select class="form-select" name="codemod"  style="width: 100%; height: 36px">
                        <option>Select</option>
                        <option value="Cd">Semestre 1</option>
                        <option value="DG">Semestre 2</option>
                        <option value="DG">Semestre 3</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group col-md-4 ">
                    <label class="">UE</label>
                    <select class="form-select bg-body" name="codemod"  style="width: 100%; height: 36px">
                        <option>Select</option>
                        <option value="Cd">CA</option>
                        <option value="DG">IPV6</option>
                        <option value="DG">Proba</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group col-md-4 ">
                    <label class="">Classe</label>
                    <select class="form-select bg-body" name="codemod"  style="width: 100%; height: 36px">
                        <option>Select</option>
                        <option value="Cd">MiageL1</option>
                        <option value="DG">CCA2</option>
                        <option value="DG">ABF3</option>
                        </optgroup>
                    </select>
                </div>

                <div class="form-group col-md-4" >
                    <label for="exampleInputEmail1">Enseignant</label>
                    <input type="text" class="form-control" name="libmod" id="prenom" placeholder="Entrez le libellé du module">
                </div>


            </div>
            <div class="form-group col-md-4">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
           </div>
            </div>

        </form>

    </section>

@endsection
