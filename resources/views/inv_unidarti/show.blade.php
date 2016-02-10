@extends('layouts.master')

@section('content')

    <h1>Inv_unidarti</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Uni Articulo</th><th>Uni Peso</th><th>Uni Volumen</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $inv_unidarti->id }}</td> <td> {{ $inv_unidarti->uni_articulo }} </td><td> {{ $inv_unidarti->uni_peso }} </td><td> {{ $inv_unidarti->uni_volumen }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection