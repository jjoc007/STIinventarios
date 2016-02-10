<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\inv_prevenart;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class inv_prevenartController extends Controller
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
		
        $inv_prevenart = new inv_prevenart();
		
		$codigo  = Input::get('prv_codigo');
		$intervenini  = Input::get('prv_intervenini');
		$intervenfin  = Input::get('prv_intervenfin');
		$unidad  = Input::get('prv_unidad');
		$valor  = Input::get('prv_valor');
		$vigencia  = Input::get('prv_vigencia');
		$usuario  = Input::get('prv_usuario');
		$fecaud  = Input::get('prv_fecaud');

		if($codigo){
            $inv_prevenart = $inv_prevenart->where('prv_codigo', $codigo);
        }
        if($usuario){
            $inv_prevenart = $inv_prevenart->where('prv_usuario', $usuario);
        }		
		
		if ($sortby && $order) {
            $inv_prevenart = $inv_prevenart->orderBy($sortby, $order)->paginate(env('PAGINATE_CRUD'));
        } else {
           $inv_prevenart = $inv_prevenart->paginate(env('PAGINATE_CRUD'));
        }
		
		$urlActual= 'inv_prevenart.index';
        return view('dashboard.index', compact('inv_prevenart','urlActual','sortby','order'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       $data['urlActual']= 'inv_prevenart.create';
       return view('dashboard.index',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        inv_prevenart::create($request->all());

        Session::flash('flash_message', 'inv_prevenart added!');

        return redirect('inv_prevenart');
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
        $inv_prevenart = inv_prevenart::findOrFail($id);

        return view('inv_prevenart.show', compact('inv_prevenart'));
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
        $inv_prevenart = inv_prevenart::findOrFail($id);

        $data['urlActual']= 'inv_prevenart.edit';
        return view('dashboard.index',$data,compact('inv_prevenart'));
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
        
        $inv_prevenart = inv_prevenart::findOrFail($id);
        $inv_prevenart->update($request->all());

        Session::flash('flash_message', 'inv_prevenart updated!');

        return redirect('inv_prevenart');
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
        inv_prevenart::destroy($id);

        Session::flash('flash_message', 'inv_prevenart deleted!');

        return redirect('inv_prevenart');
    }

}
