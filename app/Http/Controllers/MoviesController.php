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
        $movie= Movies::all();
        return $movie;

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
        $movie = Movies::create($request->all());
        return $movie;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function show(Movies $movie)
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
    public function update(Request $request, Movies $movie)
    {
        $movie->update($request->all());
        return response()->json();
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movies $movie)
    {
        $movie->delete();
        return response()->json();
        //
    }
    /* public function delete($id, Request $request)
    {
        $movies= $this->get($id);
        $movies->delete();
        return $movies;

    }*/

}
