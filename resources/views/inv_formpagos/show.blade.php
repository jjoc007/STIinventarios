@extends('layouts.master')

@section('content')

    <h1>Inv_formpago</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Fmp Codigo</th><th>Fmp Nombre</th><th>Fmp Tipo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $inv_formpago->id }}</td> <td> {{ $inv_formpago->fmp_codigo }} </td><td> {{ $inv_formpago->fmp_nombre }} </td><td> {{ $inv_formpago->fmp_tipo }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection