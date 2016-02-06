<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\inv_documento;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class inv_documentosController extends Controller
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
		
		$codigo  = Input::get('doc_codigo');
        $descripcion  = Input::get('doc_descripcion');
		$clase  = Input::get('doc_clase');
		$secuencia  = Input::get('doc_secuencia');
        $modulo  = Input::get('doc_modulo');
		$estado  = Input::get('doc_estado');		
		$observ  = Input::get('doc_observ');
        $fecaud  = Input::get('doc_fecaud');
		$usuario  = Input::get('doc_usuario');
		
		$inv_documentos = new inv_documento();
		
		if($codigo){
            $inv_documentos = $inv_documentos->where('doc_codigo', $codigo);
        }
		if($descripcion){
            $inv_documentos = $inv_documentos->where('doc_descripcion', $descripcion);
        }
		if($clase){
            $inv_documentos = $inv_documentos->where('doc_clase', $clase);
        }
		if($secuencia){
            $inv_documentos = $inv_documentos->where('doc_secuencia', $secuencia);
        }
		if($modulo){
            $inv_documentos = $inv_documentos->where('doc_modulo', $modulo);
        }
		if($estado){
            $inv_documentos = $inv_documentos->where('doc_estado', $estado);
        }
		if($observ){
            $inv_documentos = $inv_documentos->where('doc_observ', $observ);
        }
		if($fecaud){
            $inv_documentos = $inv_documentos->where('doc_fecaud', $fecaud);
        }
		if($usuario){
            $inv_documentos = $inv_documentos->where('doc_usuario', $usuario);
        }
		
		if ($sortby && $order) {
            $inv_documentos = $inv_documentos->orderBy($sortby, $order)->paginate(env('PAGINATE_CRUD'));
        } else {
           $inv_documentos = $inv_documentos->paginate(env('PAGINATE_CRUD'));
        }
		
        $urlActual= 'inv_documentos.index';
        return view('dashboard.index', compact('inv_documentos','urlActual','sortby','order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
		
		$data['urlActual']= 'inv_documentos.create';
        return view('dashboard.index',$data);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        inv_documento::create($request->all());

        Session::flash('flash_message', 'inv_documento added!');

        return redirect('inv_documentos');
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
        $inv_documento = inv_documento::findOrFail($id);

        return view('inv_documentos.show', compact('inv_documento'));
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
        $inv_documento = inv_documento::findOrFail($id);

        return view('inv_documentos.edit', compact('inv_documento'));
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
        
        $inv_documento = inv_documento::findOrFail($id);
        $inv_documento->update($request->all());

        Session::flash('flash_message', 'inv_documento updated!');

        return redirect('inv_documentos');
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
        inv_documento::destroy($id);

        Session::flash('flash_message', 'inv_documento deleted!');

        return redirect('inv_documentos');
    }

}
