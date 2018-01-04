<?php

namespace App\Http\Controllers;

use App\Household;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HouseholdsController extends Controller
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
    public function index()
    {
        Auth::loginUsingId(1);

        $households = Household::where('user_id', auth()->id())->latest()->get();

        return view('household.index', compact('households'));
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
     * @param  \App\Household  $household
     * @return \Illuminate\Http\Response
     */
    public function show(Household $household)
    {
        return view('household.show', compact('household'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Household  $household
     * @return \Illuminate\Http\Response
     */
    public function edit(Household $household)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Household  $household
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Household $household)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Household  $household
     * @return \Illuminate\Http\Response
     */
    public function destroy(Household $household)
    {
        //
    }
}
