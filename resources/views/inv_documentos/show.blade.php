@extends('layouts.master')

@section('content')

    <h1>Inv_documento</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Doc Codigo</th><th>Doc Descripcion</th><th>Doc Clase</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $inv_documento->id }}</td> <td> {{ $inv_documento->doc_codigo }} </td><td> {{ $inv_documento->doc_descripcion }} </td><td> {{ $inv_documento->doc_clase }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection