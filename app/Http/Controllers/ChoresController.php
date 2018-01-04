<?php

namespace App\Http\Controllers;

use App\Chore;
use App\Household;
use Illuminate\Http\Request;

class ChoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Household $household)
    {
        $chores = $household->chores;

        return view('household.chores.index', compact('chores'));
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
     * @param  \App\Household  $household
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Household $household, Request $request)
    {
        $household->addChore([
            'name' => request('name'),
            'description' => request('description')
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Household  $household
     * @param  \App\Chore  $chore
     * @return \Illuminate\Http\Response
     */
    public function show(Household $household, Chore $chore)
    {
        return view('household.chores.show', compact('chore'));
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
