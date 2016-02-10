<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\inv_combosart;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class inv_combosartController extends Controller
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
		
		$codigo  = Input::get('cmb_codigo');
        $nombre  = Input::get('cmb_nombre');
		$fecdesde  = Input::get('cmb_fecdesde');
        $fechasta  = Input::get('cmb_fechasta');
		$usuario  = Input::get('cmb_usuario');
        $fecauc  = Input::get('cmb_fecaud');

		$inv_combosart= new inv_combosart();
		
		
		if($codigo){
            $inv_combosart = $inv_combosart->where('cmb_codigo', $codigo);
        }
        if($nombre){
            $inv_combosart = $inv_combosart->where('cmb_nombre', $nombre);
        }
		if($fecdesde){
            $inv_combosart = $inv_combosart->where('cmb_fecdesde', $fecdesde);
        }
        if($fechasta){
            $inv_combosart = $inv_combosart->where('cmb_fechasta', $fechasta);
        }
		if($usuario){
            $inv_combosart = $inv_combosart->where('cmb_usuario', $usuario);
        }
        if($fecauc){
            $inv_combosart = $inv_combosart->where('cmb_fecaud', $fecauc);
        }
		
		if ($sortby && $order) {
            $inv_combosart = $inv_combosart->orderBy($sortby, $order)->paginate(env('PAGINATE_CRUD'));
        } else {
           $inv_combosart = $inv_combosart->paginate(env('PAGINATE_CRUD'));
        }
		
		$urlActual= 'inv_combosart.index';
        return view('dashboard.index', compact('inv_combosart','urlActual','sortby','order'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $data['urlActual']= 'inv_combosart.create';
        return view('dashboard.index',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        inv_combosart::create($request->all());

        Session::flash('flash_message', 'inv_combosart added!');

        return redirect('inv_combosart');
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
        $inv_combosart = inv_combosart::findOrFail($id);

        return view('inv_combosart.show', compact('inv_combosart'));
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
        $inv_combosart = inv_combosart::findOrFail($id);

       	$data['urlActual']= 'inv_combosart.edit';
        return view('dashboard.index',$data,compact('inv_combosart'));
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
        
        $inv_combosart = inv_combosart::findOrFail($id);
        $inv_combosart->update($request->all());

        Session::flash('flash_message', 'inv_combosart updated!');

        return redirect('inv_combosart');
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
        inv_combosart::destroy($id);

        Session::flash('flash_message', 'inv_combosart deleted!');

        return redirect('inv_combosart');
    }

}
