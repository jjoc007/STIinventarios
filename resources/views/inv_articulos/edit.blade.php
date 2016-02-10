 <div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">   

    <h1>Edit Inv_articulo</h1>
    <hr/>

    {!! Form::model($inv_articulo, [
        'method' => 'PATCH',
        'url' => ['inv_articulos', $inv_articulo->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('art_codigo') ? 'has-error' : ''}}">
                {!! Form::label('art_codigo', 'Art Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('art_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_nombre') ? 'has-error' : ''}}">
                {!! Form::label('art_nombre', 'Art Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('art_nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_referencia') ? 'has-error' : ''}}">
                {!! Form::label('art_referencia', 'Art Referencia: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('art_referencia', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_referencia', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_estado') ? 'has-error' : ''}}">
                {!! Form::label('art_estado', 'Art Estado: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('art_estado', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_estado', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_codalterno') ? 'has-error' : ''}}">
                {!! Form::label('art_codalterno', 'Art Codalterno: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('art_codalterno', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_codalterno', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_codbarra') ? 'has-error' : ''}}">
                {!! Form::label('art_codbarra', 'Art Codbarra: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('art_codbarra', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_codbarra', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_presentacion') ? 'has-error' : ''}}">
                {!! Form::label('art_presentacion', 'Art Presentacion: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('art_presentacion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_presentacion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_nomgeneric') ? 'has-error' : ''}}">
                {!! Form::label('art_nomgeneric', 'Art Nomgeneric: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('art_nomgeneric', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_nomgeneric', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_marca') ? 'has-error' : ''}}">
                {!! Form::label('art_marca', 'Art Marca: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('art_marca', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_marca', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_centrocos') ? 'has-error' : ''}}">
                {!! Form::label('art_centrocos', 'Art Centrocos: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('art_centrocos', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_centrocos', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_utlfeccomp') ? 'has-error' : ''}}">
                {!! Form::label('art_utlfeccomp', 'Art Utlfeccomp: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'art_utlfeccomp', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_utlfeccomp', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_ultfecventa') ? 'has-error' : ''}}">
                {!! Form::label('art_ultfecventa', 'Art Ultfecventa: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'art_ultfecventa', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_ultfecventa', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_imagen') ? 'has-error' : ''}}">
                {!! Form::label('art_imagen', 'Art Imagen: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('art_imagen', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_imagen', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_fecexpedi') ? 'has-error' : ''}}">
                {!! Form::label('art_fecexpedi', 'Art Fecexpedi: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'art_fecexpedi', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_fecexpedi', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_fecvence') ? 'has-error' : ''}}">
                {!! Form::label('art_fecvence', 'Art Fecvence: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'art_fecvence', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_fecvence', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_lote') ? 'has-error' : ''}}">
                {!! Form::label('art_lote', 'Art Lote: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('art_lote', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_lote', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_talla') ? 'has-error' : ''}}">
                {!! Form::label('art_talla', 'Art Talla: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('art_talla', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_talla', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_refrigeracion') ? 'has-error' : ''}}">
                {!! Form::label('art_refrigeracion', 'Art Refrigeracion: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('art_refrigeracion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_refrigeracion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_paisorigen') ? 'has-error' : ''}}">
                {!! Form::label('art_paisorigen', 'Art Paisorigen: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('art_paisorigen', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_paisorigen', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_coddian') ? 'has-error' : ''}}">
                {!! Form::label('art_coddian', 'Art Coddian: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('art_coddian', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_coddian', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_codinvima') ? 'has-error' : ''}}">
                {!! Form::label('art_codinvima', 'Art Codinvima: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('art_codinvima', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_codinvima', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_fecauditoria') ? 'has-error' : ''}}">
                {!! Form::label('art_fecauditoria', 'Art Fecauditoria: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'art_fecauditoria', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_fecauditoria', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_usuario') ? 'has-error' : ''}}">
                {!! Form::label('art_usuario', 'Art Usuario: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('art_usuario', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_usuario', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_terminal') ? 'has-error' : ''}}">
                {!! Form::label('art_terminal', 'Art Terminal: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('art_terminal', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_terminal', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_observacion') ? 'has-error' : ''}}">
                {!! Form::label('art_observacion', 'Art Observacion: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('art_observacion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_observacion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_unidadmedida') ? 'has-error' : ''}}">
                {!! Form::label('art_unidadmedida', 'Art Unidadmedida: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('art_unidadmedida', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_unidadmedida', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_tipmed') ? 'has-error' : ''}}">
                {!! Form::label('art_tipmed', 'Art Tipmed: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('art_tipmed', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_tipmed', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_alm') ? 'has-error' : ''}}">
                {!! Form::label('art_alm', 'Art Alm: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('art_alm', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_alm', '<p class="help-block">:message</p>') !!}
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