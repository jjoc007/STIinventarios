<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\inv_ciudade;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class inv_ciudadesController extends Controller
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
		
		$depart  = Input::get('ciu_depart');
        $codigo  = Input::get('ciu_codigo');
		$nombre  = Input::get('ciu_nombre');
       		
		$inv_ciudades = new inv_ciudade();
		
		if($depart){
            $inv_ciudades = $inv_ciudades->where('ciu_depart', $depart);
        }

        if($codigo){
            $inv_ciudades = $inv_ciudades->where('ciu_codigo', $codigo);
        }
		
		if($nombre){
            $inv_ciudades = $inv_ciudades->where('ciu_nombre','like', '%'.$nombre.'%');
        }
		
		if ($sortby && $order) {
            $inv_ciudades = $inv_ciudades->orderBy($sortby, $order)->paginate(env('PAGINATE_CRUD'));
        } else {
           $inv_ciudades = $inv_ciudades->paginate(env('PAGINATE_CRUD'));
        }

		$urlActual= 'inv_ciudades.index';
        return view('dashboard.index', compact('inv_ciudades','urlActual','sortby','order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
		$data['urlActual']= 'inv_ciudades.create';
        return view('dashboard.index',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        inv_ciudade::create($request->all());

        Session::flash('flash_message', 'inv_ciudade added!');

        return redirect('inv_ciudades');
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
        $inv_ciudade = inv_ciudade::findOrFail($id);

        return view('inv_ciudades.show', compact('inv_ciudade'));
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
		
		$inv_ciudade = inv_ciudade::findOrFail($id);
				
        $data['urlActual']= 'inv_ciudades.edit';
        return view('dashboard.index',$data,compact('inv_ciudade'));	
       
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
        
        $inv_ciudade = inv_ciudade::findOrFail($id);
        $inv_ciudade->update($request->all());

        Session::flash('flash_message', 'inv_ciudade updated!');

        return redirect('inv_ciudades');
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
        inv_ciudade::destroy($id);

        Session::flash('flash_message', 'inv_ciudade deleted!');

        return redirect('inv_ciudades');
    }

}
