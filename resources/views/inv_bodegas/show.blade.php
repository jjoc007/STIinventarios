@extends('layouts.master')

@section('content')

    <h1>Inv_bodega</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Bod Codigo</th><th>Bod Nombre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $inv_bodega->id }}</td> <td> {{ $inv_bodega->bod_codigo }} </td><td> {{ $inv_bodega->bod_nombre }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection