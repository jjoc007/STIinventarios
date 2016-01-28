@extends('layouts.master')

@section('content')

    <h1>Inv_almacene</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Alm Codigo</th><th>Alm Nombre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $inv_almacene->id }}</td> <td> {{ $inv_almacene->alm_codigo }} </td><td> {{ $inv_almacene->alm_nombre }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection