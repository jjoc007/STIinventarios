<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\inv_articulo;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class inv_articulosController extends Controller
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
		
		$inv_articulos = new inv_articulo();
		
		$codigo =  Input::get('art_codigo');
		$nombre = Input::get('art_nombre');
		$referencia = Input::get('art_referencia');
		$estado = Input::get('art_estado');
		$codalterno= Input::get('art_codalterno');
		$codbarra = Input::get('art_codbarra');
		$presentacion= Input::get('art_presentacion');
		$nomgeneric= Input::get('art_nomgeneric');
		$marca= Input::get('art_marca');
		$centrocos= Input::get('art_centrocos');
		$utlfecomp= Input::get('art_utlfeccomp');
		$ultfecventa= Input::get('art_ultfecventa');
		$imagen= Input::get('art_imagen');
		$fecexpedi= Input::get('art_fecexpedi');
		$fecvence= Input::get('art_fecvence');
		$lote= Input::get('art_lote');
		$talla= Input::get('art_talla');
		$refrigeracion= Input::get('art_refrigeracion');
		$paisorigen= Input::get('art_paisorigen');
		$coddian= Input::get('art_coddian');
		$codinvima= Input::get('art_codinvima');
		$fecauditoria= Input::get('art_fecauditoria');
		$usuario= Input::get('art_usuario');
		$terminal= Input::get('art_terminal');
		$observacion= Input::get('art_observacion');
		$unidadmedida= Input::get('art_unidadmedida');
		$tipmed= Input::get('art_tipmed');
		$alm= Input::get('art_alm');

		if($codigo){
            $inv_articulos = $inv_articulos->where('art_codigo', $codigo);
        }
        if($nombre){
            $inv_articulos = $inv_articulos->where('art_nombre', $nombre);
        }
		if($referencia){
            $inv_articulos = $inv_articulos->where('art_referencia', $referencia);
        }
				
        if ($sortby && $order) {
            $inv_articulos = $inv_articulos->orderBy($sortby, $order)->paginate(env('PAGINATE_CRUD'));
        } else {
           $inv_articulos = $inv_articulos->paginate(env('PAGINATE_CRUD'));
        }
		
		$urlActual= 'inv_articulos.index';
        return view('dashboard.index', compact('inv_articulos','urlActual','sortby','order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
		$data['urlActual']= 'inv_articulos.create';
        return view('dashboard.index',$data);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        inv_articulo::create($request->all());

        Session::flash('flash_message', 'inv_articulo added!');

        return redirect('inv_articulos');
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
        $inv_articulo = inv_articulo::findOrFail($id);

        $data['urlActual']= 'inv_articulos.edit';
        return view('dashboard.index',$data,compact('inv_articulos'));
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
        $inv_articulo = inv_articulo::findOrFail($id);

      	$data['urlActual']= 'inv_articulos.edit';
        return view('dashboard.index',$data,compact('inv_articulo'));
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
        
        $inv_articulo = inv_articulo::findOrFail($id);
        $inv_articulo->update($request->all());

        Session::flash('flash_message', 'inv_articulo updated!');

        return redirect('inv_articulos');
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
        inv_articulo::destroy($id);

        Session::flash('flash_message', 'inv_articulo deleted!');

        return redirect('inv_articulos');
    }

}
