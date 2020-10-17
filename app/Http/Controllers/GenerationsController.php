<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\generation;


class GenerationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generations = generation::all();

        return view('generations/index', compact('generations'));
    }

    /**
     * Show the form for creating a new resource.
     *      for url 'x' return a view that allows users to input data
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('generations/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /** create custom function to generate and return lyrics to user
     * returns view to user 
     * store function is use to store lyric in DB (if user decides)
     */
    public function getOutput(Request $request) /** refer to movie controller store function */
    {
        
        return view('generations/model-output');
    }


    public function store(Request $request)
    {
        $values = $request->all();
        return $values;
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
    public function destroy(generation $generation)
    {
        //remove instance from DB
        $generation->delete();
        //reload page with updated table
        return redirect()->route('generations.index');
        
    }
}
