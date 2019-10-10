<?php

namespace App\Http\Controllers;

use App\corretor;
use Illuminate\Http\Request;

class CorretorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $corretores = Corretor::all();
        return view('corretores.index',$corretores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\corretor  $corretor
     * @return \Illuminate\Http\Response
     */
    public function show(corretor $corretor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\corretor  $corretor
     * @return \Illuminate\Http\Response
     */
    public function edit(corretor $corretor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\corretor  $corretor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, corretor $corretor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\corretor  $corretor
     * @return \Illuminate\Http\Response
     */
    public function destroy(corretor $corretor)
    {
        //
    }
}
