<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\inv_imptoart;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class inv_imptoartController extends Controller
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
		
        $inv_imptoart = new inv_imptoart();
        
		$articulo  = Input::get('ima_articulo');
        $codigo  = Input::get('ima_codigo');
		$nombre  = Input::get('ima_nom');
		$porcent  = Input::get('ima_porcent');
        $basimpto  = Input::get('ima_basimpto');
		$observacion  = Input::get('ima_observacion');
		$estado  = Input::get('ima_estado');
        $usuario  = Input::get('ima_usuario');
		$fecaud  = Input::get('ima_fecaud');
		
		
		if($articulo){
            $inv_imptoart = $inv_imptoart->where('ima_articulo', $articulo);
        }

        if($codigo){
            $inv_imptoart = $inv_imptoart->where('ima_codigo', $codigo);
        }
		
		if($nombre){
            $inv_imptoart = $inv_imptoart->where('ima_nom','like', '%'.$nombre.'%');
        }
		
		if($porcent){
            $inv_imptoart = $inv_imptoart->where('ima_porcent', $porcent);
        }

        if($basimpto){
            $inv_imptoart = $inv_imptoart->where('ima_basimpto', $basimpto);
        }
		
		if($observacion){
            $inv_imptoart = $inv_imptoart->where('ima_observacion','like', '%'.$observacion.'%');
        }
		
		if($estado){
            $inv_imptoart = $inv_imptoart->where('ima_estado', $estado);
        }

        if($usuario){
            $inv_imptoart = $inv_imptoart->where('ima_usuario', $usuario);
        }
		
		if($fecaud){
            $inv_imptoart = $inv_imptoart->where('ima_fecaud', $fecaud);
        }		
		
		if ($sortby && $order) {
            $inv_imptoart = $inv_imptoart->orderBy($sortby, $order)->paginate(env('PAGINATE_CRUD'));
        } else {
           $inv_imptoart = $inv_imptoart->paginate(env('PAGINATE_CRUD'));
        }

		$urlActual= 'inv_imptoart.index';
        return view('dashboard.index', compact('inv_imptoart','urlActual','sortby','order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
		$data['urlActual']= 'inv_imptoart.create';
        return view('dashboard.index',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        inv_imptoart::create($request->all());

        Session::flash('flash_message', 'inv_imptoart added!');

        return redirect('inv_imptoart');
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
        $inv_imptoart = inv_imptoart::findOrFail($id);

        return view('inv_imptoart.show', compact('inv_imptoart'));
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
        $inv_imptoart = inv_imptoart::findOrFail($id);
		
		$data['urlActual']= 'inv_imptoart.edit';
        return view('dashboard.index',$data,compact('inv_imptoart'));	
        
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
        
        $inv_imptoart = inv_imptoart::findOrFail($id);
        $inv_imptoart->update($request->all());

        Session::flash('flash_message', 'inv_imptoart updated!');

        return redirect('inv_imptoart');
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
        inv_imptoart::destroy($id);

        Session::flash('flash_message', 'inv_imptoart deleted!');

        return redirect('inv_imptoart');
    }

}
