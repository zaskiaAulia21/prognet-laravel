<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BiodataApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Biodata::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $biodata = new Biodata();
        $biodata->fill($request->all())->save();
        return $biodata;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Biodata::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $biodata = Biodata::find($id);
        $biodata->fill($request->all())->save();
        return $biodata;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $biodata = Biodata::find($id);
        $biodata->delete();
    }
}
