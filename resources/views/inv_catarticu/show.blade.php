@extends('layouts.master')

@section('content')

    <h1>Inv_catarticu</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Cat Codigo</th><th>Cat Nombre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $inv_catarticu->id }}</td> <td> {{ $inv_catarticu->cat_codigo }} </td><td> {{ $inv_catarticu->cat_nombre }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection