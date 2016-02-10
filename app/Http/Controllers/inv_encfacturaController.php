<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\inv_encfactura;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class inv_encfacturaController extends Controller
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
		
        $inv_encfactura = new inv_encfactura();
		
		$sucursal  = Input::get('efa_sucursal');
		$documento  = Input::get('efa_documento');
		$numero  = Input::get('efa_numero');
		$fecha  = Input::get('efa_fecha');
		$cliente  = Input::get('efa_cliente');
		$fecaud  = Input::get('efa_fecaud');
		$usuario  = Input::get('efa_usuario');
		$vendedor  = Input::get('efa_vendedor');
		$observa  = Input::get('efa_observa');
		$anulado  = Input::get('efa_anulado');
		$fecanula  = Input::get('efa_fecanula');
		$usuanula  = Input::get('efa_usuanula');
		$motanula  = Input::get('efa_motanula');
		$formpag  = Input::get('efa_formpag');
		$porcdesc  = Input::get('efa_porcdesc');
		$valdesc  = Input::get('efa_valdesc');
		
		if($documento){
            $inv_encfactura = $inv_encfactura->where('efa_documento', $documento);
        }
        if($numero){
            $inv_encfactura = $inv_encfactura->where('efa_numero', $numero);
        }
		
		if ($sortby && $order) {
            $inv_encfactura = $inv_encfactura->orderBy($sortby, $order)->paginate(env('PAGINATE_CRUD'));
        } else {
           $inv_encfactura = $inv_encfactura->paginate(env('PAGINATE_CRUD'));
        }
		
        $urlActual= 'inv_encfactura.index';
        return view('dashboard.index', compact('inv_encfactura','urlActual','sortby','order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        
		$data['urlActual']= 'inv_encfactura.create';
        return view('dashboard.index',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        inv_encfactura::create($request->all());

        Session::flash('flash_message', 'inv_encfactura added!');

        return redirect('inv_encfactura');
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
        $inv_encfactura = inv_encfactura::findOrFail($id);

        return view('inv_encfactura.show', compact('inv_encfactura'));
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
        $inv_encfactura = inv_encfactura::findOrFail($id);

        $data['urlActual']= 'inv_encfactura.edit';
        return view('dashboard.index',$data,compact('inv_encfactura'));
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
        
        $inv_encfactura = inv_encfactura::findOrFail($id);
        $inv_encfactura->update($request->all());

        Session::flash('flash_message', 'inv_encfactura updated!');

        return redirect('inv_encfactura');
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
        inv_encfactura::destroy($id);

        Session::flash('flash_message', 'inv_encfactura deleted!');

        return redirect('inv_encfactura');
    }

}
