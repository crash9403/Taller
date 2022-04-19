<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use Illuminate\Support\Facades\Redirect;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiante=Estudiante::orderBy('id','DESC')->paginate(3); 
        return view('estudiante.index',compact('estudiante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estudiante=new Estudiante; 
        $estudiante->nombre_est=$request->get('nombre_est'); 
        $estudiante->numero_identificacion=$request->get('numero_identificacion'); 
        $estudiante->edad=$request->get('edad'); 
        $estudiante->nombre_padre=$request->get('nombre_padre'); 
        $estudiante->nombre_madre=$request->get('nombre_madre'); 
        $estudiante->nombre_acudiente=$request->get('nombre_acudiente'); 
        $estudiante->telefono_contacto=$request->get('telefono_contacto'); 
        $estudiante->telefono_acudiente=$request->get('telefono_acudiente'); 
        $estudiante->grado_cursa=$request->get('grado_cursa'); 
        $estudiante->save(); 
        return Redirect::to('estudiante'); 
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
    public function destroy($id)
    {
        //
    }
}
