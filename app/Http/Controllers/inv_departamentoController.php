<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\inv_departamento;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class inv_departamentoController extends Controller
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
       
		$codigo  = Input::get('dep_codigo');
        $nombre  = Input::get('dep_nombre');
		
		$inv_departamento = new inv_departamento();		
        	
		if($codigo){
            $inv_departamento = $inv_departamento->where('dep_codigo', $codigo);
        }

        if($nombre){
            $inv_departamento = $inv_departamento->where('dep_nombre', $nombre);
        }
		
		if ($sortby && $order) {
            $inv_departamento = $inv_departamento->orderBy($sortby, $order)->paginate(env('PAGINATE_CRUD'));
        } else {
           $inv_departamento = $inv_departamento->paginate(env('PAGINATE_CRUD'));
        }

		$urlActual= 'inv_departamento.index';
        return view('dashboard.index', compact('inv_departamento','urlActual','sortby','order'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $data['urlActual']= 'inv_departamento.create';
        return view('dashboard.index',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        inv_departamento::create($request->all());

        Session::flash('flash_message', 'inv_departamento added!');

        return redirect('inv_departamento');
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
        $inv_departamento = inv_departamento::findOrFail($id);

        return view('inv_departamento.show', compact('inv_departamento'));
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
        $inv_departamento = inv_departamento::findOrFail($id);

		$data['urlActual']= 'inv_departamentos.edit';
        return view('dashboard.index',$data,compact('inv_departamento'));
		      
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
        
        $inv_departamento = inv_departamento::findOrFail($id);
        $inv_departamento->update($request->all());

        Session::flash('flash_message', 'inv_departamento updated!');

        return redirect('inv_departamento');
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
        inv_departamento::destroy($id);

        Session::flash('flash_message', 'inv_departamento deleted!');

        return redirect('inv_departamento');
    }

}
