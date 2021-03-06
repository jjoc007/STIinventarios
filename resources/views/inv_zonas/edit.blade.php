 <div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">   

    <h2>Edit Inv_zona</h2>
    <hr/>

    {!! Form::model($inv_zona, [
        'method' => 'PATCH',
        'url' => ['inv_zonas', $inv_zona->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('zon_codigo') ? 'has-error' : ''}}">
                {!! Form::label('zon_codigo', 'Zon Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('zon_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('zon_codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('zon_nombre') ? 'has-error' : ''}}">
                {!! Form::label('zon_nombre', 'Zon Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('zon_nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('zon_nombre', '<p class="help-block">:message</p>') !!}
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