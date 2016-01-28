@extends('layouts.master')

@section('content')

    <h1>Inv_prevenart <a href="{{ url('inv_prevenart/create') }}" class="btn btn-primary pull-right btn-sm">Add New Inv_prevenart</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Prv Codigo</th><th>Prv Intervenini</th><th>Prv Intervenfin</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($inv_prevenart as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('inv_prevenart', $item->id) }}">{{ $item->prv_codigo }}</a></td><td>{{ $item->prv_intervenini }}</td><td>{{ $item->prv_intervenfin }}</td>
                    <td>
                        <a href="{{ url('inv_prevenart/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['inv_prevenart', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $inv_prevenart->render() !!} </div>
    </div>

@endsection
