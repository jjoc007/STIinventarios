<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\inv_sucursale;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class inv_sucursalesController extends Controller
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
		
		
        $codigo  = Input::get('suc_codigo');
        $nombre  = Input::get('suc_nombre');
		$direccion  = Input::get('suc_direccion');
		
		$inv_sucursales = new inv_sucursale();
		
		if($codigo){
            $inv_sucursales = $inv_sucursales->where('suc_codigo', $codigo);
        }

        if($nombre){
            $inv_sucursales = $inv_sucursales->where('suc_nombre','like', '%'.$nombre.'%');
        }
		
		if($direccion){
            $inv_sucursales = $inv_sucursales->where('suc_direccion','like', '%'.$direccion.'%');
        }
		
		if ($sortby && $order) {
            $inv_sucursales = $inv_sucursales->orderBy($sortby, $order)->paginate(env('PAGINATE_CRUD'));
        } else {
           $inv_sucursales = $inv_sucursales->paginate(env('PAGINATE_CRUD'));
        }
				
        
		$urlActual= 'inv_sucursales.index';
        return view('dashboard.index',compact('inv_sucursales','urlActual','sortby','order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
		$data['urlActual']= 'inv_sucursales.create';
        return view('dashboard.index',$data);
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        inv_sucursale::create($request->all());

        Session::flash('flash_message', 'inv_sucursale added!');

        return redirect('inv_sucursales');
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
        $inv_sucursale = inv_sucursale::findOrFail($id);

        return view('inv_sucursales.show', compact('inv_sucursale'));
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
        $inv_sucursale = inv_sucursale::findOrFail($id);
		
		
        $data['urlActual']= 'inv_sucursales.edit';
        return view('dashboard.index',$data,compact('inv_sucursale'));

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
        
        $inv_sucursale = inv_sucursale::findOrFail($id);
        $inv_sucursale->update($request->all());

        Session::flash('flash_message', 'inv_sucursale updated!');

        return redirect('inv_sucursales');
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
        inv_sucursale::destroy($id);

        Session::flash('flash_message', 'inv_sucursale deleted!');

        return redirect('inv_sucursales');
    }

}
