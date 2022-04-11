<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\module;

class ModuleController extends Controller
{
    //

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mod= module::paginate(10);
        return view('modules.index')->with(compact('mod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('modules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        Module::create($request->all());
        return redirect()->route("module.index")->with('flash_message', 'module Addedd!');




        return view('modules.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(module $showmod)
    {
        //
        $showmod= module::paginate(10);
        return view('modules.show')->with(compact('showmod'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $upmod=Module::findOrFail($id);
        return view('modules.edit',compact('upmod'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id){
        $request->validate([
            'codemod' => 'required',
            'libmod' => 'required',
            'credit' => 'required',
            'vh_ct' => 'required',
            'vh_td' => 'required',
            'vh_tp' => 'required',
            'poids' => 'required',
            'enseignantMod' => 'required',
            'ueMod' => 'required',
            'semestreMod' => 'required'

        ]);
        $upmod=Module::findOrFail($id);
        $upmod ->codemod = $request->get ('codemod');
        $upmod ->libmod = $request->get ('libmod');
        $upmod ->credit = $request->get ('credit');
        $upmod ->vh_ct = $request->get ('vh_ct');
        $upmod ->vh_td = $request->get ('vh_td');
        $upmod ->vh_tp = $request->get ('vh_tp');
        $upmod ->poids = $request->get ('poids');
        $upmod ->enseignantMod = $request->get ('enseignantMod');
        $upmod ->ueMod = $request->get ('ueMod');
        $upmod ->semestreMod = $request->get ('semestreMod');
        $upmod ->save();
        return redirect()->route('module.index')->with('mise à jour reussi');
        // return redirect()->route("enseignants.index");
    }


    public function delete($id){
        $data= Module::where('id',$id);
        $data->delete();
        return redirect()->route("module.index");
    }


}
