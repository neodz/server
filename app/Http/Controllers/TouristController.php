<?php

namespace App\Http\Controllers;

use App\Tourist;
use App\User;
use Illuminate\Http\Request;

class TouristController extends Controller
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

        $tourists=Tourist::with('user')->get();
       // dd($tourists);

       return view('dashboard.Tourists',compact("tourists"));
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
     * @param  \App\Tourist  $tourist
     * @return \Illuminate\Http\Response
     */
    public function show(Tourist $tourist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tourist  $tourist
     * @return \Illuminate\Http\Response
     */
    public function edit(Tourist $tourist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tourist  $tourist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tourist $tourist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tourist  $tourist
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {

        $tourist = Tourist::find($id);


        return   $tourist->delete()?redirect('/admin/tourists'):back();
    }
}
