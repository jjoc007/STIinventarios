@extends('layouts.master')

@section('content')

    <h1>Inv_bodegas <a href="{{ url('inv_bodegas/create') }}" class="btn btn-primary pull-right btn-sm">Add New Inv_bodega</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Bod Codigo</th><th>Bod Nombre</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($inv_bodegas as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('inv_bodegas', $item->id) }}">{{ $item->bod_codigo }}</a></td><td>{{ $item->bod_nombre }}</td>
                    <td>
                        <a href="{{ url('inv_bodegas/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['inv_bodegas', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $inv_bodegas->render() !!} </div>
    </div>

@endsection
