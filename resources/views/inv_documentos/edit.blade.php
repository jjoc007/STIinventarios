 <div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">   
		
    <h2>Edit Inv_documento</h2>
    <hr/>

    {!! Form::model($inv_documento, [
        'method' => 'PATCH',
        'url' => ['inv_documentos', $inv_documento->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('doc_codigo') ? 'has-error' : ''}}">
                {!! Form::label('doc_codigo', 'Doc Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('doc_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('doc_codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('doc_descripcion') ? 'has-error' : ''}}">
                {!! Form::label('doc_descripcion', 'Doc Descripcion: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('doc_descripcion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('doc_descripcion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('doc_clase') ? 'has-error' : ''}}">
                {!! Form::label('doc_clase', 'Doc Clase: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('doc_clase', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('doc_clase', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('doc_secuencia') ? 'has-error' : ''}}">
                {!! Form::label('doc_secuencia', 'Doc Secuencia: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('doc_secuencia', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('doc_secuencia', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('doc_modulo') ? 'has-error' : ''}}">
                {!! Form::label('doc_modulo', 'Doc Modulo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('doc_modulo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('doc_modulo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('doc_estado') ? 'has-error' : ''}}">
                {!! Form::label('doc_estado', 'Doc Estado: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('doc_estado', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('doc_estado', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('doc_obser') ? 'has-error' : ''}}">
                {!! Form::label('doc_obser', 'Doc Obser: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('doc_obser', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('doc_obser', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('doc_fecaud') ? 'has-error' : ''}}">
                {!! Form::label('doc_fecaud', 'Doc Fecaud: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'doc_fecaud', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('doc_fecaud', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('doc_usuario') ? 'has-error' : ''}}">
                {!! Form::label('doc_usuario', 'Doc Usuario: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('doc_usuario', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('doc_usuario', '<p class="help-block">:message</p>') !!}
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
