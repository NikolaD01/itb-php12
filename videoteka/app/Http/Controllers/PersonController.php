<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Person::all();

        return view('person.index' , ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('person.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'b_date' => 'required'
        ]);
  

      
        Person::create($request->all()); 
        return redirect()->route('person.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person)
    {
        return view('person.edit', compact('person'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Person $person)
    {
       /* $request->validate([
            'name' => 
            ['required',
            
            Rule::unique('people','name')->ignore($person->id),'alpha'],
            
            'surname' => ['required',
            Rule::unique('people','surname')->ignore($person->id),
            'alpha'],

            'b_date' => ['required',
            Rule::unique('people','b_date')->ignore($person->id),
            'alpha'] 
        ]);
        */
        $person->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        //
    }
}
