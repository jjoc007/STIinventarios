@extends('layouts.master')

@section('content')

    <h1>Edit Inv_controlart</h1>
    <hr/>

    {!! Form::model($inv_controlart, [
        'method' => 'PATCH',
        'url' => ['inv_controlart', $inv_controlart->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('ctl_articulo') ? 'has-error' : ''}}">
                {!! Form::label('ctl_articulo', 'Ctl Articulo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ctl_articulo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ctl_articulo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ctl_cantstock') ? 'has-error' : ''}}">
                {!! Form::label('ctl_cantstock', 'Ctl Cantstock: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('ctl_cantstock', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ctl_cantstock', '<p class="help-block">:message</p>') !!}
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