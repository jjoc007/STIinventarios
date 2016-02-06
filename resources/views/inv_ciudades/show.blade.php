@extends('layouts.master')

@section('content')

    <h1>Inv_ciudade</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Ciu Depart</th><th>Ciu Codigo</th><th>Ciu Nombre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $inv_ciudade->id }}</td> <td> {{ $inv_ciudade->ciu_depart }} </td><td> {{ $inv_ciudade->ciu_codigo }} </td><td> {{ $inv_ciudade->ciu_nombre }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection