<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        $inv_almacenes = inv_almacene::paginate(15);

        return view('inv_almacenes.index', compact('inv_almacenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('inv_almacenes.create');
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

        return view('inv_almacenes.edit', compact('inv_almacene'));
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
