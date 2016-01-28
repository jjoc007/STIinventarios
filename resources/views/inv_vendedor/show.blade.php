@extends('layouts.master')

@section('content')

    <h1>Inv_vendedor</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Ven Codigo</th><th>Ven Nombre</th><th>Ven Zona</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $inv_vendedor->id }}</td> <td> {{ $inv_vendedor->ven_codigo }} </td><td> {{ $inv_vendedor->ven_nombre }} </td><td> {{ $inv_vendedor->ven_zona }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection