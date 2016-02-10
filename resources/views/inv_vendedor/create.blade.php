<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">
		
    <h2>Create New Inv_vendedor</h2>
    <hr/>

    {!! Form::open(['url' => 'inv_vendedor', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('ven_codigo') ? 'has-error' : ''}}">
                {!! Form::label('ven_codigo', 'Ven Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ven_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ven_codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ven_nombre') ? 'has-error' : ''}}">
                {!! Form::label('ven_nombre', 'Ven Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ven_nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ven_nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ven_zona') ? 'has-error' : ''}}">
                {!! Form::label('ven_zona', 'Ven Zona: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ven_zona', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ven_zona', '<p class="help-block">:message</p>') !!}
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