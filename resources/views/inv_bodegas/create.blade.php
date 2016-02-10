<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">
		

    <h2>Create New Inv_bodega</h2>
    <hr/>

    {!! Form::open(['url' => 'inv_bodegas', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('bod_codigo') ? 'has-error' : ''}}">
                {!! Form::label('bod_codigo', 'Bod Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('bod_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('bod_codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('bod_nombre') ? 'has-error' : ''}}">
                {!! Form::label('bod_nombre', 'Bod Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('bod_nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('bod_nombre', '<p class="help-block">:message</p>') !!}
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