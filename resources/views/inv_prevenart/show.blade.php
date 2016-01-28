@extends('layouts.master')

@section('content')

    <h1>Inv_prevenart</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Prv Codigo</th><th>Prv Intervenini</th><th>Prv Intervenfin</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $inv_prevenart->id }}</td> <td> {{ $inv_prevenart->prv_codigo }} </td><td> {{ $inv_prevenart->prv_intervenini }} </td><td> {{ $inv_prevenart->prv_intervenfin }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection