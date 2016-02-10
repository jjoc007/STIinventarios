 <div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">   


    <h2>Edit Inv_unidarti</h2>
    <hr/>

    {!! Form::model($inv_unidarti, [
        'method' => 'PATCH',
        'url' => ['inv_unidarti', $inv_unidarti->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('uni_articulo') ? 'has-error' : ''}}">
                {!! Form::label('uni_articulo', 'Uni Articulo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('uni_articulo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('uni_articulo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('uni_peso') ? 'has-error' : ''}}">
                {!! Form::label('uni_peso', 'Uni Peso: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('uni_peso', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('uni_peso', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('uni_volumen') ? 'has-error' : ''}}">
                {!! Form::label('uni_volumen', 'Uni Volumen: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('uni_volumen', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('uni_volumen', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('uni_largo') ? 'has-error' : ''}}">
                {!! Form::label('uni_largo', 'Uni Largo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('uni_largo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('uni_largo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('uni_alto') ? 'has-error' : ''}}">
                {!! Form::label('uni_alto', 'Uni Alto: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('uni_alto', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('uni_alto', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('uni_presentacion') ? 'has-error' : ''}}">
                {!! Form::label('uni_presentacion', 'Uni Presentacion: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('uni_presentacion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('uni_presentacion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('uni_presembalaje') ? 'has-error' : ''}}">
                {!! Form::label('uni_presembalaje', 'Uni Presembalaje: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('uni_presembalaje', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('uni_presembalaje', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('uni_presemventa') ? 'has-error' : ''}}">
                {!! Form::label('uni_presemventa', 'Uni Presemventa: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('uni_presemventa', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('uni_presemventa', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('uni_fecaud') ? 'has-error' : ''}}">
                {!! Form::label('uni_fecaud', 'Uni Fecaud: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'uni_fecaud', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('uni_fecaud', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('uni_usuario') ? 'has-error' : ''}}">
                {!! Form::label('uni_usuario', 'Uni Usuario: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('uni_usuario', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('uni_usuario', '<p class="help-block">:message</p>') !!}
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