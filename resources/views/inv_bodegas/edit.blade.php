@extends('layouts.master')

@section('content')

    <h1>Edit Inv_bodega</h1>
    <hr/>

    {!! Form::model($inv_bodega, [
        'method' => 'PATCH',
        'url' => ['inv_bodegas', $inv_bodega->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('bod_codigo') ? 'has-error' : ''}}">
                {!! Form::label('bod_codigo', 'Bod Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('bod_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('bod_codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('bod_nombre') ? 'has-error' : ''}}">
                {!! Form::label('bod_nombre', 'Bod Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('bod_nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('bod_nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection