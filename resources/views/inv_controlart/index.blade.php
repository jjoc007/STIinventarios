@extends('layouts.master')

@section('content')

    <h1>Inv_controlart <a href="{{ url('inv_controlart/create') }}" class="btn btn-primary pull-right btn-sm">Add New Inv_controlart</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Ctl Articulo</th><th>Ctl Cantstock</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($inv_controlart as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('inv_controlart', $item->id) }}">{{ $item->ctl_articulo }}</a></td><td>{{ $item->ctl_cantstock }}</td>
                    <td>
                        <a href="{{ url('inv_controlart/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['inv_controlart', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $inv_controlart->render() !!} </div>
    </div>

@endsection
