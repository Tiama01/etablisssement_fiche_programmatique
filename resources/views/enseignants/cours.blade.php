@extends('layouts.app')

@section('title1')
    Affecter un module à un enseignant
@endsection

@section('content')

             <!-- Main content -->
             <section class="content mb-3">
                <div class="container-fluid">
                  <!-- SELECT2 EXAMPLE -->
                  <div class="card card-default">
                    <!-- /.card-header -->
                    <div class="card-body">
                      <div class="row">
                        <label class="col-3 my-2">Selectionnez un enseigant :</label>
                        <div class="col-md-4">
                          <div class="form-group">
                            <select class="form-control select2" style="width: 100%;">
                              <option selected="selected">Dr NARES Carter</option>
                              <option>Pr KOUASSI Junior</option>
                              <option>Dr AKPA Simon Pierre</option>
                              <option>Dr TIA Toua Inocent</option>
                              <option>Dr TIA Toua Inocent</option>
                              <option>Dr TIA Toua Inocent</option>
                              <option>Dr TIA Toua Inocent</option>
                            </select>
                          </div>
                          <!-- /.form-group -->
                        </div>
                      </div>
                      <!-- /.row -->
                      <div class="row">
                        <label class="col-3 my-2">Selectionnez un module :</label>
                        <div class="col-md-4">
                          <div class="form-group">
                            <select class="form-control select2" style="width: 100%;">
                              <option selected="selected">Maths</option>
                              <option>Pc</option>
                              <option>SVT</option>
                              <option>EPS</option>
                              <option>His-Geo</option>
                              <option>Angl</option>
                              <option>Informatique</option>
                            </select>
                          </div>
                          <!-- /.form-group -->
                        </div>
                      </div>

                      <div class="row">
                        <label class="col-3 my-2">Fonction :</label>
                        <div class="form-group col-md-2" >
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrez votre nom">
                        </div>
                      </div>

                      <div class="card-success  ">
                        <button type="button" class="btn btn-block btn-success btn-lg col-2">Valider</button>
                      </div>

                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->

                  <!-- /.card -->

                <!-- /.container-fluid -->
              </section>
              <!-- /.content -->

@endsection
