@extends('layouts.master')

@section('content')

    <h1>Inv_imptoart</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Ima Articulo</th><th>Ima Codigo</th><th>Ima Nom</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $inv_imptoart->id }}</td> <td> {{ $inv_imptoart->ima_articulo }} </td><td> {{ $inv_imptoart->ima_codigo }} </td><td> {{ $inv_imptoart->ima_nom }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection