<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\inv_unidarti;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class inv_unidartiController extends Controller
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
		
		$inv_unidarti = new inv_unidarti();
		
		$articulo  = Input::get('uni_articulo');
        $peso  = Input::get('uni_peso');
		$volumen  = Input::get('uni_volumen');
        $largo  = Input::get('uni_largo');
		$alto  = Input::get('uni_alto');
		$presentacion  = Input::get('uni_presentacion');
		$presembalaje  = Input::get('uni_presembalaje');
        $presemventa  = Input::get('uni_presemventa');
		$fecaud  = Input::get('uni_fecaud');
        $usuario  = Input::get('uni_usuario');

       if($articulo){
            $inv_unidarti = $inv_unidarti->where('uni_articulo', $articulo);
        }
        if($peso){
            $inv_unidarti = $inv_unidarti->where('uni_peso', $peso);
        }
		if($volumen){
            $inv_unidarti = $inv_unidarti->where('uni_volumen', $volumen);
        }
        if($largo){
            $inv_unidarti = $inv_unidarti->where('uni_largo', $largo);
        }
		if($alto){
            $inv_unidarti = $inv_unidarti->where('uni_alto', $alto);
        }
        if($presentacion){
            $inv_unidarti = $inv_unidarti->where('uni_presentacion', $presentacion);
        }
	    if($presembalaje){
            $inv_unidarti = $inv_unidarti->where('uni_presembalaje', $presembalaje);
        }
        if($presemventa){
            $inv_unidarti = $inv_unidarti->where('uni_presemventa', $presemventa);
        }
		if($fecaud){
            $inv_unidarti = $inv_unidarti->where('uni_fecaud', $fecaud);
        }
        if($usuario){
            $inv_unidarti = $inv_unidarti->where('uni_usuario', $usuario);
        }	   
	   
		if ($sortby && $order) {
            $inv_unidarti = $inv_unidarti->orderBy($sortby, $order)->paginate(env('PAGINATE_CRUD'));
        } else {
           $inv_unidarti = $inv_unidarti->paginate(env('PAGINATE_CRUD'));
        }
		
		$urlActual= 'inv_unidarti.index';
        return view('dashboard.index', compact('inv_unidarti','urlActual','sortby','order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
		 $data['urlActual']= 'inv_unidarti.create';
        return view('dashboard.index',$data);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        inv_unidarti::create($request->all());

        Session::flash('flash_message', 'inv_unidarti added!');

        return redirect('inv_unidarti');
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
        $inv_unidarti = inv_unidarti::findOrFail($id);

        return view('inv_unidarti.show', compact('inv_unidarti'));
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
        $inv_unidarti = inv_unidarti::findOrFail($id);

		$data['urlActual']= 'inv_unidarti.edit';
        return view('dashboard.index',$data,compact('inv_unidarti'));        
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
        
        $inv_unidarti = inv_unidarti::findOrFail($id);
        $inv_unidarti->update($request->all());

        Session::flash('flash_message', 'inv_unidarti updated!');

        return redirect('inv_unidarti');
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
        inv_unidarti::destroy($id);

        Session::flash('flash_message', 'inv_unidarti deleted!');

        return redirect('inv_unidarti');
    }

}
