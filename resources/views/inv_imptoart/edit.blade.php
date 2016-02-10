 <div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">  
    
	<h1>Edit Inv_imptoart</h1>
    <hr/>

    {!! Form::model($inv_imptoart, [
        'method' => 'PATCH',
        'url' => ['inv_imptoart', $inv_imptoart->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('ima_articulo') ? 'has-error' : ''}}">
                {!! Form::label('ima_articulo', 'Ima Articulo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ima_articulo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ima_articulo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ima_codigo') ? 'has-error' : ''}}">
                {!! Form::label('ima_codigo', 'Ima Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ima_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ima_codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ima_nom') ? 'has-error' : ''}}">
                {!! Form::label('ima_nom', 'Ima Nom: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ima_nom', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ima_nom', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ima_porcent') ? 'has-error' : ''}}">
                {!! Form::label('ima_porcent', 'Ima Porcent: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('ima_porcent', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ima_porcent', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ima_basimpto') ? 'has-error' : ''}}">
                {!! Form::label('ima_basimpto', 'Ima Basimpto: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('ima_basimpto', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ima_basimpto', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ima_observacion') ? 'has-error' : ''}}">
                {!! Form::label('ima_observacion', 'Ima Observacion: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ima_observacion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ima_observacion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ima_estado') ? 'has-error' : ''}}">
                {!! Form::label('ima_estado', 'Ima Estado: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ima_estado', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ima_estado', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ima_fecaud') ? 'has-error' : ''}}">
                {!! Form::label('ima_fecaud', 'Ima Fecaud: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'ima_fecaud', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ima_fecaud', '<p class="help-block">:message</p>') !!}
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
