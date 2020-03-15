<?php

namespace App\Http\Controllers;

use App\nota;
use Illuminate\Http\Request;
use App;
class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // return view('inicio',['notas'=>$notas]);
           // $notas = App\nota::all();
            $notas = App\nota::paginate(3);  
            return view('inicio',compact('notas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $notaAdd = new nota();
        $notaAdd->name = $request->name;
        $notaAdd->des = $request->descrition;
        $notaAdd->save();
        return back()->with('add','succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function show(nota $nota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $notas = App\nota::find($id);
        return view('edit',compact('notas'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $notas = App\nota::find($id);
        $notas->name = $request->name;
        $notas->des = $request->descrition;
        $notas->save();
        return back()->with('edit','succes');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notas = App\nota::find($id);
        $notas->delete();
        return back()->with('delete','delete');

    }
}
