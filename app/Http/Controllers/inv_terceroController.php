<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\inv_tercero;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class inv_terceroController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
		$sortby  = Input::get('sortby');
        $order   = Input::get('order');
		
        $inv_tercero = new inv_tercero();

		$codigo  = Input::get('ter_codigo');
		$alterno  = Input::get('ter_alterno');
		$digverif  = Input::get('ter_digverif');
		$nombre  = Input::get('ter_nombre');
		$apellido  = Input::get('ter_apellido');
		$naturaleza  = Input::get('ter_naturaleza');
		$tipodni  = Input::get('ter_tipodni');
		$dni  = Input::get('ter_dni');
		$pais  = Input::get('ter_pais');
		$depart  = Input::get('ter_depart');
		$ciudad  = Input::get('ter_ciudad');
		$direcc1  = Input::get('ter_direcc1');
		$direcc2  = Input::get('ter_direcc2');
		$telefono1 = Input::get('ter_telefono1');
		$telefono2 = Input::get('ter_telefono2');
		$email = Input::get('ter_email1');
		$email2  = Input::get('ter_email12');
		$pagweb  = Input::get('ter_pagweb');
		$razscial  = Input::get('ter_razscial');
		$zip  = Input::get('ter_zip');
		$facebook  = Input::get('ter_ faceboock');
		$twiter  = Input::get('ter_twiter');
		$instagram  = Input::get('ter_instagram');
		$estado  = Input::get('ter_estado');
		$estrato  = Input::get('ter_estrato');
		$observaciones  = Input::get('ter_Observaciones');
		$usuario  = Input::get('ter_usuario');
		$fecha = Input::get('ter_fecha');
		$rfc  = Input::get('ter_rfc');
		$doc  = Input::get('Tip_doc');
		$porc  = Input::get('ter_porc');
		
		if($codigo){
            $inv_tercero = $inv_tercero->where('ter_codigo', $codigo);
        }
        if($nombre){
            $inv_tercero = $inv_tercero->where('ter_nombre', $nombre);
        }
		if($dni){
            $inv_tercero = $inv_tercero->where('ter_dni', $dni);
        }
		
		if ($sortby && $order) {
            $inv_tercero = $inv_tercero->orderBy($sortby, $order)->paginate(env('PAGINATE_CRUD'));
        } else {
           $inv_tercero = $inv_tercero->paginate(env('PAGINATE_CRUD'));
        }
		
		$urlActual= 'inv_tercero.index';
        return view('dashboard.index', compact('inv_tercero','urlActual','sortby','order'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
		$data['urlActual']= 'inv_tercero.create';
        return view('dashboard.index',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        inv_tercero::create($request->all());

        Session::flash('flash_message', 'inv_tercero added!');

        return redirect('inv_tercero');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $inv_tercero = inv_tercero::findOrFail($id);

        return view('inv_tercero.show', compact('inv_tercero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $inv_tercero = inv_tercero::findOrFail($id);

        $data['urlActual']= 'inv_tercero.edit';
        return view('dashboard.index',$data,compact('inv_tercero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $inv_tercero = inv_tercero::findOrFail($id);
        $inv_tercero->update($request->all());

        Session::flash('flash_message', 'inv_tercero updated!');

        return redirect('inv_tercero');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        inv_tercero::destroy($id);

        Session::flash('flash_message', 'inv_tercero deleted!');

        return redirect('inv_tercero');
    }

}
