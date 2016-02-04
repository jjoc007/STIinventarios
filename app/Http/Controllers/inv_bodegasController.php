<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use App\inv_bodega;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class inv_bodegasController extends Controller
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
        $codigo  = Input::get('bod_codigo');
        $nombre  = Input::get('bod_nombre');

    
        $inv_bodegas = new inv_bodega();

        if($codigo){
            $inv_bodegas = $inv_bodegas->where('bod_codigo', $codigo);
        }

        if($nombre){
            $inv_bodegas = $inv_bodegas->where('bod_nombre','like', '%'.$nombre.'%');
        }

        if ($sortby && $order) {
            $inv_bodegas = $inv_bodegas->orderBy($sortby, $order)->paginate(env('PAGINATE_CRUD'));
        } else {
           $inv_bodegas = $inv_bodegas->paginate(env('PAGINATE_CRUD'));
        }

        $urlActual= 'inv_bodegas.index';
        return view('dashboard.index',compact('inv_bodegas','urlActual','sortby','order'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

         $data['urlActual']= 'inv_bodegas.create';
        return view('dashboard.index',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        inv_bodega::create($request->all());

        Session::flash('flash_message', 'inv_bodega added!');

        return redirect('inv_bodegas');
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
        $inv_bodega = inv_bodega::findOrFail($id);

        return view('inv_bodegas.show', compact('inv_bodega'));
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

         $inv_catarticu = inv_catarticu::findOrFail($id);
        $data['urlActual']= 'inv_bodegas.edit';
        return view('dashboard.index',$data,compact('inv_bodega'));
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
        
        $inv_bodega = inv_bodega::findOrFail($id);
        $inv_bodega->update($request->all());

        Session::flash('flash_message', 'inv_bodega updated!');

        return redirect('inv_bodegas');
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
        inv_bodega::destroy($id);

        Session::flash('flash_message', 'inv_bodega deleted!');

        return redirect('inv_bodegas');
    }

}
