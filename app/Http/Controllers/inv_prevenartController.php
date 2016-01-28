<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\inv_prevenart;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class inv_prevenartController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $inv_prevenart = inv_prevenart::paginate(15);

        return view('inv_prevenart.index', compact('inv_prevenart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('inv_prevenart.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        inv_prevenart::create($request->all());

        Session::flash('flash_message', 'inv_prevenart added!');

        return redirect('inv_prevenart');
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
        $inv_prevenart = inv_prevenart::findOrFail($id);

        return view('inv_prevenart.show', compact('inv_prevenart'));
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
        $inv_prevenart = inv_prevenart::findOrFail($id);

        return view('inv_prevenart.edit', compact('inv_prevenart'));
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
        
        $inv_prevenart = inv_prevenart::findOrFail($id);
        $inv_prevenart->update($request->all());

        Session::flash('flash_message', 'inv_prevenart updated!');

        return redirect('inv_prevenart');
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
        inv_prevenart::destroy($id);

        Session::flash('flash_message', 'inv_prevenart deleted!');

        return redirect('inv_prevenart');
    }

}
