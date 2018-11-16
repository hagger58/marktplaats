<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Request;
use App\Http\Controllers\Controller;
use App\Artikels;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create'); /* makes a new article in the database */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request, array(
            'artikelnaam' => 'required|isNotEmpty()|max:255',
            'omschrijving' => '',
            'prijs' => 'required',
            'foto1' => '',
            'foto2' => ''
        ));

            //store in the database
        $artikel = new Artikel;

        $artikel->artikelnaam = $request->artikelnaam;
        $artikel->omschrijving = $request->omschrijving;
        $artikel->prijs = $request->prijs;
        $artikel->foto1 = $request->foto1;
        $artikel->foto2 = $request->foto2;

        $artikel->save();

        //redirect to another page

        return redirect()->route('artikels.show', $artikels->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
