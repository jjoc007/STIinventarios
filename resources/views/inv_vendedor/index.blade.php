@extends('layouts.master')

@section('content')

    <h1>Inv_vendedor <a href="{{ url('inv_vendedor/create') }}" class="btn btn-primary pull-right btn-sm">Add New Inv_vendedor</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Ven Codigo</th><th>Ven Nombre</th><th>Ven Zona</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($inv_vendedor as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('inv_vendedor', $item->id) }}">{{ $item->ven_codigo }}</a></td><td>{{ $item->ven_nombre }}</td><td>{{ $item->ven_zona }}</td>
                    <td>
                        <a href="{{ url('inv_vendedor/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['inv_vendedor', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $inv_vendedor->render() !!} </div>
    </div>

@endsection
