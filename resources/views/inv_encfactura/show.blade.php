@extends('layouts.master')

@section('content')

    <h1>Inv_encfactura</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Efa Sucursal</th><th>Efa Documento</th><th>Efa Numero</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $inv_encfactura->id }}</td> <td> {{ $inv_encfactura->efa_sucursal }} </td><td> {{ $inv_encfactura->efa_documento }} </td><td> {{ $inv_encfactura->efa_numero }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection