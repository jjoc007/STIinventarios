@extends('layouts.master')

@section('content')

    <h1>Inv_articulo</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Art Codigo</th><th>Art Nombre</th><th>Art Referencia</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $inv_articulo->id }}</td> <td> {{ $inv_articulo->art_codigo }} </td><td> {{ $inv_articulo->art_nombre }} </td><td> {{ $inv_articulo->art_referencia }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection