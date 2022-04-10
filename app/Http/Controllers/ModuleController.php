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
        dd($request->all());
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
    public function edit($id)
    {
        //
        $mod = module::find($id);
        return view('read', ['articles' => $mod]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(module $upmod, $id)
    {
        //
        $upmod->validate([

            'siglmod' => 'required',

            'libmod' => 'required',

            'creditmod' => 'required',

            'vh_ct' => 'required',

            'vh_td' => 'required',

            'vh_tp' => 'required',

            'poids' => 'required',

        ]);
        return redirect()->route('modules.index')->with('success','Product updated successfully');
    }


    public function destroy(Request $request)

    {

        return view('module.fiche');
    }


}
