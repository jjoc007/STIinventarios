<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">
		
    <h2>Edit Inv_encfactura</h2>
    <hr/>

    {!! Form::model($inv_encfactura, [
        'method' => 'PATCH',
        'url' => ['inv_encfactura', $inv_encfactura->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('efa_sucursal') ? 'has-error' : ''}}">
                {!! Form::label('efa_sucursal', 'Efa Sucursal: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('efa_sucursal', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('efa_sucursal', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('efa_documento') ? 'has-error' : ''}}">
                {!! Form::label('efa_documento', 'Efa Documento: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('efa_documento', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('efa_documento', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('efa_numero') ? 'has-error' : ''}}">
                {!! Form::label('efa_numero', 'Efa Numero: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('efa_numero', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('efa_numero', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('efa_fecha') ? 'has-error' : ''}}">
                {!! Form::label('efa_fecha', 'Efa Fecha: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'efa_fecha', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('efa_fecha', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('efa_cliente') ? 'has-error' : ''}}">
                {!! Form::label('efa_cliente', 'Efa Cliente: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('efa_cliente', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('efa_cliente', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('efa_fecaud') ? 'has-error' : ''}}">
                {!! Form::label('efa_fecaud', 'Efa Fecaud: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'efa_fecaud', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('efa_fecaud', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('efa_usuario') ? 'has-error' : ''}}">
                {!! Form::label('efa_usuario', 'Efa Usuario: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('efa_usuario', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('efa_usuario', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('efa_vendedor') ? 'has-error' : ''}}">
                {!! Form::label('efa_vendedor', 'Efa Vendedor: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('efa_vendedor', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('efa_vendedor', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('efa_observa') ? 'has-error' : ''}}">
                {!! Form::label('efa_observa', 'Efa Observa: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('efa_observa', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('efa_observa', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('efa_anulado') ? 'has-error' : ''}}">
                {!! Form::label('efa_anulado', 'Efa Anulado: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('efa_anulado', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('efa_anulado', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('efa_fecanula') ? 'has-error' : ''}}">
                {!! Form::label('efa_fecanula', 'Efa Fecanula: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'efa_fecanula', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('efa_fecanula', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('efa_usuanula') ? 'has-error' : ''}}">
                {!! Form::label('efa_usuanula', 'Efa Usuanula: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('efa_usuanula', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('efa_usuanula', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('efa_motanula') ? 'has-error' : ''}}">
                {!! Form::label('efa_motanula', 'Efa Motanula: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('efa_motanula', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('efa_motanula', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('efa_formpag') ? 'has-error' : ''}}">
                {!! Form::label('efa_formpag', 'Efa Formpag: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('efa_formpag', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('efa_formpag', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('efa_porcdesc') ? 'has-error' : ''}}">
                {!! Form::label('efa_porcdesc', 'Efa Porcdesc: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('efa_porcdesc', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('efa_porcdesc', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('efa_valdesc') ? 'has-error' : ''}}">
                {!! Form::label('efa_valdesc', 'Efa Valdesc: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('efa_valdesc', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('efa_valdesc', '<p class="help-block">:message</p>') !!}
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