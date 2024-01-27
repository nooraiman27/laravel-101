<?php

// functions generate by php artisan make:controller CrudController

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cruds = Crud::all();

        return view('cruds.index', compact('cruds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $formAction = route('cruds.store');

        return view('cruds.form', compact('formAction'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all()); // display all submitted input

        // all possible validation
        // all input: 'required|required_if|unique:users'
        // text: '|string|min:length|max:length|alpha|alpha_dash|alpha_num|regex'
        // email: 'email'
        // date: 'date'|after:date|before:date
        // decimal: 'numeric|digits:value|digits_between:min,max'
        // integer: 'integer'
        // datetime: 'dateformat:format'

        $request->validate([
            'text'      => 'required',
            'email'     => 'required',
            'date'      => 'required',
            'decimal'   => 'required',
            'integer'   => 'required',
            'datetime'  => 'required'
        ]);

        Crud::create($request->all());

        return redirect()->route('cruds.index')->with('success', 'New Record Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $crud = Crud::find($id);

        return view('cruds.show', compact('crud'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $formAction = route('cruds.update', $id);
        $crud = Crud::find($id);

        return view('cruds.form', compact('formAction', 'crud'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'text'      => 'required',
            'email'     => 'required',
            'date'      => 'required',
            'decimal'   => 'required',
            'integer'   => 'required',
            'datetime'  => 'required'
        ]);

        $crud = Crud::find($id);
        $crud->update($request->all());

        return redirect()->route('cruds.index')->with('success', 'Record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $crud = Crud::find($id);
        $crud->delete();

        return redirect()->route('cruds.index')->with('success', 'Record deleted successfully');
    }
}
