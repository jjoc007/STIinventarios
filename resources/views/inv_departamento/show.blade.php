@extends('layouts.master')

@section('content')

    <h1>Inv_departamento</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Dep Codigo</th><th>Dep Nombre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $inv_departamento->id }}</td> <td> {{ $inv_departamento->dep_codigo }} </td><td> {{ $inv_departamento->dep_nombre }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection