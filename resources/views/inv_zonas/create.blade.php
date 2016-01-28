@extends('layouts.master')

@section('content')

    <h1>Create New Inv_zona</h1>
    <hr/>

    {!! Form::open(['url' => 'inv_zonas', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('zon_codigo') ? 'has-error' : ''}}">
                {!! Form::label('zon_codigo', 'Zon Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('zon_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('zon_codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('zon_nombre') ? 'has-error' : ''}}">
                {!! Form::label('zon_nombre', 'Zon Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('zon_nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('zon_nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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