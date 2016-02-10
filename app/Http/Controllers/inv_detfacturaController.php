<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\inv_detfactura;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class inv_detfacturaController extends Controller
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
		
        $inv_detfactura = new inv_detfactura();

		$sucursal  = Input::get('dfa_sucursal');
		$documento  = Input::get('dfa_documento');
		$numero  = Input::get('dfa_numero');
		$fecha  = Input::get('dfa_fecha');
		$item  = Input::get('dfa_item');
		$articulo  = Input::get('dfa_articulo');
		$linea = Input::get('dfa_linea');
		$cantidad  = Input::get('dfa_cantidad');
		$virunitario  = Input::get('dfa_vlrunitario');
		$porcdescuen  = Input::get('dfa_porcdescuen');
		$virdescuen = Input::get('dfa_vlrdescuen');
		$presentacion  = Input::get('dfa_presentacion');
		$impuesto  = Input::get('dfa_impuesto');
		$total  = Input::get('dfa_total');
		$ubicacion  = Input::get('dfa_ubicacion');
		$fecaud  = Input::get('dfa_fecaud');
		$usuario  = Input::get('dfa_usuario');
		
		if($sucursal){
            $inv_detfactura = $inv_detfactura->where('dfa_sucursal', $sucursal);
        }
        if($documento){
            $inv_detfactura = $inv_detfactura->where('dfa_documento', $documento);
        }
		if($usuario){
            $inv_detfactura = $inv_detfactura->where('dfa_usuario', $usuario);
        }

		if ($sortby && $order) {
            $inv_detfactura = $inv_detfactura->orderBy($sortby, $order)->paginate(env('PAGINATE_CRUD'));
        } else {
           $inv_detfactura = $inv_detfactura->paginate(env('PAGINATE_CRUD'));
        }
		
		$urlActual= 'inv_detfactura.index';
        return view('dashboard.index', compact('inv_detfactura','urlActual','sortby','order'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $data['urlActual']= 'inv_detfactura.create';
        return view('dashboard.index',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        inv_detfactura::create($request->all());

        Session::flash('flash_message', 'inv_detfactura added!');

        return redirect('inv_detfactura');
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
        $inv_detfactura = inv_detfactura::findOrFail($id);

        return view('inv_detfactura.show', compact('inv_detfactura'));
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
        $inv_detfactura = inv_detfactura::findOrFail($id);

        $data['urlActual']= 'inv_detfactura.edit';
        return view('dashboard.index',$data,compact('inv_detfactura'));
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
        
        $inv_detfactura = inv_detfactura::findOrFail($id);
        $inv_detfactura->update($request->all());

        Session::flash('flash_message', 'inv_detfactura updated!');

        return redirect('inv_detfactura');
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
        inv_detfactura::destroy($id);

        Session::flash('flash_message', 'inv_detfactura deleted!');

        return redirect('inv_detfactura');
    }

}
