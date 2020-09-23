<?php

namespace App\Http\Controllers;

use App\User;
use App\Pharmacien;
use Illuminate\Http\Request;
use App\Http\Requests\Pharmacien as PharmacienRequest;

class PharmacienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pharmaciens = Pharmacien::paginate(25);
        return view('pharmacien.index', compact('pharmaciens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pharmacien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PharmacienRequest $pharmacienRequest)
    {
        Pharmacien::create($pharmacienRequest->all());
        return redirect()->route('pharmaciens.index')->with('info', 'Le pharmacien a bien été crée.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pharmacien  $pharmacien
     * @return \Illuminate\Http\Response
     */
    public function show(Pharmacien $pharmacien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pharmacien  $pharmacien
     * @return \Illuminate\Http\Response
     */
    public function edit(Pharmacien $pharmacien)
    {
        return view('pharmacien.edit', compact('pharmacien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pharmacien  $pharmacien
     * @return \Illuminate\Http\Response
     */
    public function update(PharmacienRequest $pharmacienRequest, Pharmacien $pharmacien)
    {
        $pharmacien->update($pharmacienRequest->all());
        
        return redirect()->route('pharmacien.index')->with('info', 'Le farmacien a bien été modifié.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pharmacien  $pharmacien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pharmacien $pharmacien)
    {
        $pharmacien->delete();

        return back()->with('info', 'Le Pharmacien a bien été supprimé de la base de données.');
    }
}
