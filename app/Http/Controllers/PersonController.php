<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $person=Person::all();
        return view('dashboard.person.index',['person'=>$person]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.person.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $person= new Person();
        $person->type=$request->input('type');
        $person->name=$request->input('name');
        $person->document_type=$request->input('document_type');
        $person->document_number=$request->input('document_number');
        $person->address=$request->input('address');
        $person->phone=$request->input('phone');
        $person->email=$request->input('email');
        $person->save();
        return view("dashboard.person.message",['msg'=>"¡Persona creada exitosamente!"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $person=Person::find($id);
        return view('dashboard.person.edit',['person'=>$person]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $person=Person::find($id);
        $person->type=$request->input('type');
        $person->name=$request->input('name');
        $person->document_type=$request->input('document_type');
        $person->document_number=$request->input('document_number');
        $person->address=$request->input('address');
        $person->phone=$request->input('phone');
        $person->email=$request->input('email');
        $person->save();
        return view("dashboard.person.message",['msg'=>"¡Persona actualizada correctamente!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
