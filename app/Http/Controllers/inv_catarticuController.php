<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\inv_catarticu;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class inv_catarticuController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $inv_catarticus = inv_catarticu::paginate(15);
        $data['urlActual']= 'inv_catarticu.index';
        return view('dashboard.index',$data,compact('inv_catarticus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $data['urlActual']= 'inv_catarticu.create';
        return view('dashboard.index',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        inv_catarticu::create($request->all());

        Session::flash('flash_message', 'inv_catarticu successfully added!');

        return redirect('inv_catarticu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $inv_catarticu = inv_catarticu::findOrFail($id);

        return view('inv_catarticu.show', compact('inv_catarticu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $inv_catarticu = inv_catarticu::findOrFail($id);
        $data['urlActual']= 'inv_catarticu.edit';
        return view('dashboard.index',$data,compact('inv_catarticu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $inv_catarticu = inv_catarticu::findOrFail($id);
        $inv_catarticu->update($request->all());

        Session::flash('flash_message', 'inv_catarticu successfully updated!');

        return redirect('inv_catarticu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        inv_catarticu::destroy($id);

        Session::flash('flash_message', 'inv_catarticu successfully deleted!');

        return redirect('inv_catarticu');
    }

}
