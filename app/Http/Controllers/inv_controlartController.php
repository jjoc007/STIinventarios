<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\inv_controlart;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class inv_controlartController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $inv_controlart = inv_controlart::paginate(15);

        return view('inv_controlart.index', compact('inv_controlart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('inv_controlart.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        inv_controlart::create($request->all());

        Session::flash('flash_message', 'inv_controlart added!');

        return redirect('inv_controlart');
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
        $inv_controlart = inv_controlart::findOrFail($id);

        return view('inv_controlart.show', compact('inv_controlart'));
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
        $inv_controlart = inv_controlart::findOrFail($id);

        return view('inv_controlart.edit', compact('inv_controlart'));
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
        
        $inv_controlart = inv_controlart::findOrFail($id);
        $inv_controlart->update($request->all());

        Session::flash('flash_message', 'inv_controlart updated!');

        return redirect('inv_controlart');
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
        inv_controlart::destroy($id);

        Session::flash('flash_message', 'inv_controlart deleted!');

        return redirect('inv_controlart');
    }

}
