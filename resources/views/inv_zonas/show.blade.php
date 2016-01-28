@extends('layouts.master')

@section('content')

    <h1>Inv_zona</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Zon Codigo</th><th>Zon Nombre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $inv_zona->id }}</td> <td> {{ $inv_zona->zon_codigo }} </td><td> {{ $inv_zona->zon_nombre }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection