<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">
		
    <h2>Create New Inv_tercero</h2>
    <hr/>

    {!! Form::open(['url' => 'inv_tercero', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('ter_codigo') ? 'has-error' : ''}}">
                {!! Form::label('ter_codigo', 'Ter Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_alterno') ? 'has-error' : ''}}">
                {!! Form::label('ter_alterno', 'Ter Alterno: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_alterno', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_alterno', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_digverif') ? 'has-error' : ''}}">
                {!! Form::label('ter_digverif', 'Ter Digverif: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_digverif', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_digverif', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_nombre') ? 'has-error' : ''}}">
                {!! Form::label('ter_nombre', 'Ter Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_apellido') ? 'has-error' : ''}}">
                {!! Form::label('ter_apellido', 'Ter Apellido: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_apellido', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_apellido', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_naturaleza') ? 'has-error' : ''}}">
                {!! Form::label('ter_naturaleza', 'Ter Naturaleza: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_naturaleza', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_naturaleza', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_tipodni') ? 'has-error' : ''}}">
                {!! Form::label('ter_tipodni', 'Ter Tipodni: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_tipodni', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_tipodni', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_dni') ? 'has-error' : ''}}">
                {!! Form::label('ter_dni', 'Ter Dni: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_dni', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_dni', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_pais') ? 'has-error' : ''}}">
                {!! Form::label('ter_pais', 'Ter Pais: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_pais', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_pais', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_depart') ? 'has-error' : ''}}">
                {!! Form::label('ter_depart', 'Ter Depart: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_depart', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_depart', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_ciudad') ? 'has-error' : ''}}">
                {!! Form::label('ter_ciudad', 'Ter Ciudad: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_ciudad', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_ciudad', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_direcc1') ? 'has-error' : ''}}">
                {!! Form::label('ter_direcc1', 'Ter Direcc1: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_direcc1', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_direcc1', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_direcc2') ? 'has-error' : ''}}">
                {!! Form::label('ter_direcc2', 'Ter Direcc2: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_direcc2', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_direcc2', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_telefono1') ? 'has-error' : ''}}">
                {!! Form::label('ter_telefono1', 'Ter Telefono1: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_telefono1', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_telefono1', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_telefono2') ? 'has-error' : ''}}">
                {!! Form::label('ter_telefono2', 'Ter Telefono2: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_telefono2', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_telefono2', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_email1') ? 'has-error' : ''}}">
                {!! Form::label('ter_email1', 'Ter Email1: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_email1', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_email1', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_email12') ? 'has-error' : ''}}">
                {!! Form::label('ter_email12', 'Ter Email12: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_email12', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_email12', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_pagweb') ? 'has-error' : ''}}">
                {!! Form::label('ter_pagweb', 'Ter Pagweb: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_pagweb', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_pagweb', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_razscial') ? 'has-error' : ''}}">
                {!! Form::label('ter_razscial', 'Ter Razscial: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_razscial', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_razscial', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_zip') ? 'has-error' : ''}}">
                {!! Form::label('ter_zip', 'Ter Zip: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_zip', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_zip', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_ faceboock') ? 'has-error' : ''}}">
                {!! Form::label('ter_ faceboock', 'Ter  Faceboock: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_ faceboock', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_ faceboock', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_twiter') ? 'has-error' : ''}}">
                {!! Form::label('ter_twiter', 'Ter Twiter: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_twiter', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_twiter', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_instagram') ? 'has-error' : ''}}">
                {!! Form::label('ter_instagram', 'Ter Instagram: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_instagram', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_instagram', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_estado') ? 'has-error' : ''}}">
                {!! Form::label('ter_estado', 'Ter Estado: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_estado', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_estado', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_estrato') ? 'has-error' : ''}}">
                {!! Form::label('ter_estrato', 'Ter Estrato: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('ter_estrato', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_estrato', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_Observaciones') ? 'has-error' : ''}}">
                {!! Form::label('ter_Observaciones', 'Ter Observaciones: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_Observaciones', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_Observaciones', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_usuario') ? 'has-error' : ''}}">
                {!! Form::label('ter_usuario', 'Ter Usuario: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_usuario', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_usuario', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_fecha') ? 'has-error' : ''}}">
                {!! Form::label('ter_fecha', 'Ter Fecha: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'ter_fecha', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_fecha', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_rfc') ? 'has-error' : ''}}">
                {!! Form::label('ter_rfc', 'Ter Rfc: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_rfc', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_rfc', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('Tip_doc') ? 'has-error' : ''}}">
                {!! Form::label('Tip_doc', 'Tip Doc: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('Tip_doc', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('Tip_doc', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_porc') ? 'has-error' : ''}}">
                {!! Form::label('ter_porc', 'Ter Porc: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('ter_porc', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_porc', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
    <div class="form-group">
       <button type="submit" class="btn btn-primary pull-right" style="margin:1em 0em;">Registrar</button>       
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