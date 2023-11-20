<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biodata = Biodata::all();
        return view('biodata.index', compact('biodata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biodata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'username' => 'required|unique:biodata',
            'password' => 'required',
            'nim' => 'required|unique:biodata',
            'email' => 'required|email|unique:biodata',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        Biodata::create($request->all());

        return redirect()->route('biodata.index')
            ->with('success', 'Biodata created successfully');
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
    public function edit(string $id)
    {
        $biodata = Biodata::find($id);
        return view('biodata.edit', compact('biodata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'full_name' => 'required',
            'username' => 'required|unique:biodata,username,' . $id,
            'password' => 'required',
            'nim' => 'required|unique:biodata,nim,' . $id,
            'email' => 'required|email|unique:biodata,email,' . $id,
            'agama' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        $biodata = Biodata::find($id);
        $biodata->update($request->all());

        return redirect()->route('biodata.index')
            ->with('success', 'Biodata updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $biodata = Biodata::find($id);
        $biodata->delete();

        return redirect()->route('biodata.index')
            ->with('success', 'Biodata deleted successfully');
    }
}
