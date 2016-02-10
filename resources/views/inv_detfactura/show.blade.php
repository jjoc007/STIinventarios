@extends('layouts.master')

@section('content')

    <h1>Inv_detfactura</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Dfa Sucursal</th><th>Dfa Documento</th><th>Dfa Numero</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $inv_detfactura->id }}</td> <td> {{ $inv_detfactura->dfa_sucursal }} </td><td> {{ $inv_detfactura->dfa_documento }} </td><td> {{ $inv_detfactura->dfa_numero }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection