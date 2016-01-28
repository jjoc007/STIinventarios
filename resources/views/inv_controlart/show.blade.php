@extends('layouts.master')

@section('content')

    <h1>Inv_controlart</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Ctl Articulo</th><th>Ctl Cantstock</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $inv_controlart->id }}</td> <td> {{ $inv_controlart->ctl_articulo }} </td><td> {{ $inv_controlart->ctl_cantstock }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection