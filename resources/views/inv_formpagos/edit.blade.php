 <div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">  

    <h2>Edit Inv_formpago</h2>
    <hr/>

    {!! Form::model($inv_formpago, [
        'method' => 'PATCH',
        'url' => ['inv_formpagos', $inv_formpago->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('fmp_codigo') ? 'has-error' : ''}}">
                {!! Form::label('fmp_codigo', 'Fmp Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('fmp_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fmp_codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fmp_nombre') ? 'has-error' : ''}}">
                {!! Form::label('fmp_nombre', 'Fmp Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('fmp_nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fmp_nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fmp_tipo') ? 'has-error' : ''}}">
                {!! Form::label('fmp_tipo', 'Fmp Tipo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('fmp_tipo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fmp_tipo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


  <div class="form-group">
        <button type="submit" class="btn btn-primary pull-right" style="margin:1em 0em;">Actualizar</button>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</div>
    </div>
</div>