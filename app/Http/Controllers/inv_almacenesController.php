<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

use App\inv_almacene;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class inv_almacenesController extends Controller
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
        $codigo  = Input::get('alm_codigo');
        $nombre  = Input::get('alm_nombre');
    
        $inv_almacenes = new inv_almacene();

        if($codigo){
            $inv_almacenes = $inv_almacenes->where('alm_codigo', $codigo);
        }

        if($nombre){
            $inv_almacenes = $inv_almacenes->where('alm_nombre','like', '%'.$nombre.'%');
        }

        if ($sortby && $order) {
            $inv_almacenes = $inv_almacenes->orderBy($sortby, $order)->paginate(env('PAGINATE_CRUD'));
        } else {
           $inv_almacenes = $inv_almacenes->paginate(env('PAGINATE_CRUD'));
        }

        $urlActual= 'inv_almacenes.index';
        return view('dashboard.index',compact('inv_almacenes','urlActual','sortby','order'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
         $data['urlActual']= 'inv_almacenes.create';
        return view('dashboard.index',$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        inv_almacene::create($request->all());

        Session::flash('flash_message', 'inv_almacene added!');

        return redirect('inv_almacenes');
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
        $inv_almacene = inv_almacene::findOrFail($id);

        return view('inv_almacenes.show', compact('inv_almacene'));
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
        $inv_almacene = inv_almacene::findOrFail($id);
        $data['urlActual']= 'inv_almacenes.edit';
        return view('dashboard.index',$data,compact('inv_catarticu'));
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
        
        $inv_almacene = inv_almacene::findOrFail($id);
        $inv_almacene->update($request->all());

        Session::flash('flash_message', 'inv_almacene updated!');

        return redirect('inv_almacenes');
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
        inv_almacene::destroy($id);

        Session::flash('flash_message', 'inv_almacene deleted!');

        return redirect('inv_almacenes');
    }

}
