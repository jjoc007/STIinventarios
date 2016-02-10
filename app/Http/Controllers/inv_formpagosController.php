<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\inv_formpago;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class inv_formpagosController extends Controller
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
		
		$codigo  = Input::get('fmp_codigo');
        $nombre  = Input::get('fmp_nombre');
		$tipo  = Input::get('fmp_tipo');
		
        $inv_formpagos = new inv_formpago();
		
		if($codigo){
            $inv_formpagos = $inv_formpagos->where('fmp_codigo', $codigo);
        }
		if($nombre){
            $inv_formpagos = $inv_formpagos->where('fmp_nombre', $nombre);
        }
		if($tipo){
            $inv_formpagos = $inv_formpagos->where('fmp_tipo', $tipo);
        }

        if ($sortby && $order) {
            $inv_formpagos = $inv_formpagos->orderBy($sortby, $order)->paginate(env('PAGINATE_CRUD'));
        } else {
           $inv_formpagos = $inv_formpagos->paginate(env('PAGINATE_CRUD'));
        }
		
        $urlActual= 'inv_formpagos.index';
        return view('dashboard.index', compact('inv_formpagos','urlActual','sortby','order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
		$data['urlActual']= 'inv_formpagos.create';
        return view('dashboard.index',$data);
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        inv_formpago::create($request->all());

        Session::flash('flash_message', 'inv_formpago added!');

        return redirect('inv_formpagos');
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
        $inv_formpago = inv_formpago::findOrFail($id);

        return view('inv_formpagos.show', compact('inv_formpago'));
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
        $inv_formpago = inv_formpago::findOrFail($id);

		$data['urlActual']= 'inv_formpagos.edit';
        return view('dashboard.index',$data,compact('inv_formpago'));
      
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
        
        $inv_formpago = inv_formpago::findOrFail($id);
        $inv_formpago->update($request->all());

        Session::flash('flash_message', 'inv_formpago updated!');

        return redirect('inv_formpagos');
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
        inv_formpago::destroy($id);

        Session::flash('flash_message', 'inv_formpago deleted!');

        return redirect('inv_formpagos');
    }

}
