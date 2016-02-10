 <div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">   
		
    <h2>Edit Inv_detfactura</h2>
    <hr/>

    {!! Form::model($inv_detfactura, [
        'method' => 'PATCH',
        'url' => ['inv_detfactura', $inv_detfactura->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('dfa_sucursal') ? 'has-error' : ''}}">
                {!! Form::label('dfa_sucursal', 'Dfa Sucursal: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('dfa_sucursal', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dfa_sucursal', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('dfa_documento') ? 'has-error' : ''}}">
                {!! Form::label('dfa_documento', 'Dfa Documento: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('dfa_documento', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dfa_documento', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('dfa_numero') ? 'has-error' : ''}}">
                {!! Form::label('dfa_numero', 'Dfa Numero: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('dfa_numero', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dfa_numero', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('dfa_fecha') ? 'has-error' : ''}}">
                {!! Form::label('dfa_fecha', 'Dfa Fecha: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'dfa_fecha', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dfa_fecha', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('dfa_item') ? 'has-error' : ''}}">
                {!! Form::label('dfa_item', 'Dfa Item: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('dfa_item', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dfa_item', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('dfa_articulo') ? 'has-error' : ''}}">
                {!! Form::label('dfa_articulo', 'Dfa Articulo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('dfa_articulo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dfa_articulo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('dfa_linea') ? 'has-error' : ''}}">
                {!! Form::label('dfa_linea', 'Dfa Linea: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('dfa_linea', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dfa_linea', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('dfa_cantidad') ? 'has-error' : ''}}">
                {!! Form::label('dfa_cantidad', 'Dfa Cantidad: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('dfa_cantidad', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dfa_cantidad', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('dfa_vlrunitario') ? 'has-error' : ''}}">
                {!! Form::label('dfa_vlrunitario', 'Dfa Vlrunitario: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('dfa_vlrunitario', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dfa_vlrunitario', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('dfa_porcdescuen') ? 'has-error' : ''}}">
                {!! Form::label('dfa_porcdescuen', 'Dfa Porcdescuen: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('dfa_porcdescuen', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dfa_porcdescuen', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('dfa_vlrdescuen') ? 'has-error' : ''}}">
                {!! Form::label('dfa_vlrdescuen', 'Dfa Vlrdescuen: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('dfa_vlrdescuen', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dfa_vlrdescuen', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('dfa_presentacion') ? 'has-error' : ''}}">
                {!! Form::label('dfa_presentacion', 'Dfa Presentacion: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('dfa_presentacion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dfa_presentacion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('dfa_impuesto') ? 'has-error' : ''}}">
                {!! Form::label('dfa_impuesto', 'Dfa Impuesto: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('dfa_impuesto', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dfa_impuesto', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('dfa_total') ? 'has-error' : ''}}">
                {!! Form::label('dfa_total', 'Dfa Total: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('dfa_total', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dfa_total', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('dfa_ubicacion') ? 'has-error' : ''}}">
                {!! Form::label('dfa_ubicacion', 'Dfa Ubicacion: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('dfa_ubicacion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dfa_ubicacion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('dfa_usuario') ? 'has-error' : ''}}">
                {!! Form::label('dfa_usuario', 'Dfa Usuario: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('dfa_usuario', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dfa_usuario', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('dfa_fecaud') ? 'has-error' : ''}}">
                {!! Form::label('dfa_fecaud', 'Dfa Fecaud: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'dfa_fecaud', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dfa_fecaud', '<p class="help-block">:message</p>') !!}
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