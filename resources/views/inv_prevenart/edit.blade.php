 <div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">   

    <h2>Edit Inv_prevenart</h2>
    <hr/>

    {!! Form::model($inv_prevenart, [
        'method' => 'PATCH',
        'url' => ['inv_prevenart', $inv_prevenart->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('prv_codigo') ? 'has-error' : ''}}">
                {!! Form::label('prv_codigo', 'Prv Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('prv_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('prv_codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('prv_intervenini') ? 'has-error' : ''}}">
                {!! Form::label('prv_intervenini', 'Prv Intervenini: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('prv_intervenini', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('prv_intervenini', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('prv_intervenfin') ? 'has-error' : ''}}">
                {!! Form::label('prv_intervenfin', 'Prv Intervenfin: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('prv_intervenfin', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('prv_intervenfin', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('prv_unidad') ? 'has-error' : ''}}">
                {!! Form::label('prv_unidad', 'Prv Unidad: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('prv_unidad', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('prv_unidad', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('prv_valor') ? 'has-error' : ''}}">
                {!! Form::label('prv_valor', 'Prv Valor: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('prv_valor', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('prv_valor', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('prv_vigencia') ? 'has-error' : ''}}">
                {!! Form::label('prv_vigencia', 'Prv Vigencia: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('prv_vigencia', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('prv_vigencia', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('prv_usuario') ? 'has-error' : ''}}">
                {!! Form::label('prv_usuario', 'Prv Usuario: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('prv_usuario', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('prv_usuario', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('prv_fecaud') ? 'has-error' : ''}}">
                {!! Form::label('prv_fecaud', 'Prv Fecaud: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'prv_fecaud', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('prv_fecaud', '<p class="help-block">:message</p>') !!}
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