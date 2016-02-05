@extends('layouts.master')

@section('content')

    <h1>Inv_sucursale</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Suc Codigo</th><th>Suc Nombre</th><th>Suc Direccion</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $inv_sucursale->id }}</td> <td> {{ $inv_sucursale->suc_codigo }} </td><td> {{ $inv_sucursale->suc_nombre }} </td><td> {{ $inv_sucursale->suc_direccion }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection