@extends('layouts.master')

@section('content')

    <h1>Inv_tercero</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Ter Codigo</th><th>Ter Alterno</th><th>Ter Digverif</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $inv_tercero->id }}</td> <td> {{ $inv_tercero->ter_codigo }} </td><td> {{ $inv_tercero->ter_alterno }} </td><td> {{ $inv_tercero->ter_digverif }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection