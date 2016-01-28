<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\inv_zona;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class inv_zonasController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $inv_zonas = inv_zona::paginate(15);

        return view('inv_zonas.index', compact('inv_zonas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('inv_zonas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        inv_zona::create($request->all());

        Session::flash('flash_message', 'inv_zona added!');

        return redirect('inv_zonas');
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
        $inv_zona = inv_zona::findOrFail($id);

        return view('inv_zonas.show', compact('inv_zona'));
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
        $inv_zona = inv_zona::findOrFail($id);

        return view('inv_zonas.edit', compact('inv_zona'));
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
        
        $inv_zona = inv_zona::findOrFail($id);
        $inv_zona->update($request->all());

        Session::flash('flash_message', 'inv_zona updated!');

        return redirect('inv_zonas');
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
        inv_zona::destroy($id);

        Session::flash('flash_message', 'inv_zona deleted!');

        return redirect('inv_zonas');
    }

}
