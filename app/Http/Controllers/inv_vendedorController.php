<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\inv_vendedor;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class inv_vendedorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $inv_vendedor = inv_vendedor::paginate(15);

        return view('inv_vendedor.index', compact('inv_vendedor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('inv_vendedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        inv_vendedor::create($request->all());

        Session::flash('flash_message', 'inv_vendedor added!');

        return redirect('inv_vendedor');
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
        $inv_vendedor = inv_vendedor::findOrFail($id);

        return view('inv_vendedor.show', compact('inv_vendedor'));
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
        $inv_vendedor = inv_vendedor::findOrFail($id);

        return view('inv_vendedor.edit', compact('inv_vendedor'));
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
        
        $inv_vendedor = inv_vendedor::findOrFail($id);
        $inv_vendedor->update($request->all());

        Session::flash('flash_message', 'inv_vendedor updated!');

        return redirect('inv_vendedor');
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
        inv_vendedor::destroy($id);

        Session::flash('flash_message', 'inv_vendedor deleted!');

        return redirect('inv_vendedor');
    }

}
