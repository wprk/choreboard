<?php

namespace App\Http\Controllers;

use App\Chore;
use Illuminate\Http\Request;

class ChoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chores = Chore::latest()->get();

        return view('chores.index', compact('chores'));
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
     * @param  \App\Chore  $chore
     * @return \Illuminate\Http\Response
     */
    public function show(Chore $chore)
    {
        return view('chores.show', compact('chore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chore  $chore
     * @return \Illuminate\Http\Response
     */
    public function edit(Chore $chore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chore  $chore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chore $chore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chore  $chore
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chore $chore)
    {
        //
    }
}
