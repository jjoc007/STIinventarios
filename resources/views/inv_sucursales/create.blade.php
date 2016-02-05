<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">

    <h2>Create New Inv_sucursale</h2>
    <hr/>

    {!! Form::open(['url' => 'inv_sucursales', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('suc_codigo') ? 'has-error' : ''}}">
                {!! Form::label('suc_codigo', 'Suc Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('suc_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('suc_codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('suc_nombre') ? 'has-error' : ''}}">
                {!! Form::label('suc_nombre', 'Suc Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('suc_nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('suc_nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('suc_direccion') ? 'has-error' : ''}}">
                {!! Form::label('suc_direccion', 'Suc Direccion: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('suc_direccion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('suc_direccion', '<p class="help-block">:message</p>') !!}
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