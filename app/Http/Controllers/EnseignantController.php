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

    public function edit(Request $request,$id){
        return view('');
    }

    public function update(Request $request,$id){
        return view('');
    }

    public function delete($id){
        return view('');
    }

    public function cours(){
        return view('enseignants.cours');
    }


}
