@extends('layouts.master')

@section('content')

    <h1>Inv_combosart</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Cmb Codigo</th><th>Cmb Nombre</th><th>Cmb Fecdesde</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $inv_combosart->id }}</td> <td> {{ $inv_combosart->cmb_codigo }} </td><td> {{ $inv_combosart->cmb_nombre }} </td><td> {{ $inv_combosart->cmb_fecdesde }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection