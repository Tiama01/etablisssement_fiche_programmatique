<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Enseignant;
use Illuminate\Pagination\PaginationState;

class EnseignantController extends Controller
{
    public function index(){
        $prof= Enseignant::paginate(5);
        return view('enseignants.index',compact('prof'));
    }


    public function create(){
        return view('enseignants.create');
    }




    public function store(Request $request){

        Enseignant::create($request->all());
        return redirect()->route("enseignant.index")->with('flash_message', 'Enseignant Addedd!');




        return view('enseignants.index');
    }

    public function show(){

        return view('enseignants.show');
    }

    public function edit($id){
        $data=Enseignant::findOrFail($id);
        return view('enseignants.edit',compact('data'));
    }

    public function update(Request $request,$id){
        $request->validate([
            'matricule' => 'required|matricule',
            'Nom' => 'required',
            'Prenom' => 'required',
            'mail' => 'required|mail',
            'Telephone' => 'required'
        ]);
        $data=Enseignant::findOrFail($id);
        $data ->matricule = $request->get ('matricule');
        $data ->Nom = $request->get ('Nom');
        $data ->Prenom = $request->get ('Prenom');
        $data ->mail = $request->get ('mail');
        $data ->Telephone = $request->get ('Telephone');
        $data ->save();
        return redirect()->route('enseignant.index')->with('mise à jour reussi');
        // return redirect()->route("enseignants.index");
    }

    public function delete($id){
        $data= Enseignant::where('id',$id);
        $data->delete();
        return redirect()->route("enseignant.index");
    }

    public function cours(){
        return view('enseignants.cours');
    }


}
