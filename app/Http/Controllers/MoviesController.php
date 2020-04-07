<?php

namespace App\Http\Controllers;

use App\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies= Movies::all();
        return $movies;

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
        $movies = Movies::create($request->all());
        return $movies;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function show(Movies $movies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $movies= $this->get($id);
        $movies->fill($request->all())->save();
        return $movies;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movies $movies)
    {
        $movies->update($request->all());
        return response()->json();
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movies $movies)
    {
        $movies->delete();
        return response()->json();
        //
    }
     public function delete($id, Request $request)
    {
        $movies= $this->get($id);
        $movies->delete();
        return $movies;

    }

}
