<?php

namespace App\Http\Controllers;

use App\Models\Porfolio;
use Illuminate\Http\Request;

class PorfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Porfolio::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $porfolio = new Porfolio();

        $porfolio->img = $request->img;
        $porfolio->comentarios = $request->comentarios;
        $porfolio->info = $request->info;
        $porfolio->save();

        return $porfolio;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Porfolio  $porfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Porfolio $porfolio)
    {
        return $porfolio;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Porfolio  $porfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Porfolio $porfolio)
    {
        $request->validate([
             'img' => 'required',
             'comentarios' => 'required',
             'info' => 'required'
        ]);

        $porfolio->img = $request->img;
        $porfolio->comentarios = $request->comentarios;
        $porfolio->info = $request->info;
        $porfolio->update();

        return $porfolio;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Porfolio  $porfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Porfolio $porfolio)
    {
        if(is_null($porfolio)){
            return response()->json('no se encontro el dato amiguito', 404);
        }
        $porfolio->delete();
        return response()->noContent();
    }
}
