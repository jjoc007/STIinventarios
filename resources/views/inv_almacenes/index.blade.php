@extends('layouts.master')

@section('content')

    <h1>Inv_almacenes <a href="{{ url('inv_almacenes/create') }}" class="btn btn-primary pull-right btn-sm">Add New Inv_almacene</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Alm Codigo</th><th>Alm Nombre</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($inv_almacenes as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('inv_almacenes', $item->id) }}">{{ $item->alm_codigo }}</a></td><td>{{ $item->alm_nombre }}</td>
                    <td>
                        <a href="{{ url('inv_almacenes/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['inv_almacenes', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $inv_almacenes->render() !!} </div>
    </div>

@endsection
