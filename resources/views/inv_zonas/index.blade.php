@extends('layouts.master')

@section('content')

    <h1>Inv_zonas <a href="{{ url('inv_zonas/create') }}" class="btn btn-primary pull-right btn-sm">Add New Inv_zona</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Zon Codigo</th><th>Zon Nombre</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($inv_zonas as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('inv_zonas', $item->id) }}">{{ $item->zon_codigo }}</a></td><td>{{ $item->zon_nombre }}</td>
                    <td>
                        <a href="{{ url('inv_zonas/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['inv_zonas', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $inv_zonas->render() !!} </div>
    </div>

@endsection
