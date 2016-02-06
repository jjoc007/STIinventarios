<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">
		
    <h2>Create New Inv_ciudade</h2>
    <hr/>

    {!! Form::open(['url' => 'inv_ciudades', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('ciu_depart') ? 'has-error' : ''}}">
                {!! Form::label('ciu_depart', 'Ciu Depart: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ciu_depart', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ciu_depart', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ciu_codigo') ? 'has-error' : ''}}">
                {!! Form::label('ciu_codigo', 'Ciu Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ciu_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ciu_codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ciu_nombre') ? 'has-error' : ''}}">
                {!! Form::label('ciu_nombre', 'Ciu Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ciu_nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ciu_nombre', '<p class="help-block">:message</p>') !!}
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