 <div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">  
		
    <h2>Edit Inv_departamento</h2>
    <hr/>

    {!! Form::model($inv_departamento, [
        'method' => 'PATCH',
        'url' => ['inv_departamento', $inv_departamento->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('dep_codigo') ? 'has-error' : ''}}">
                {!! Form::label('dep_codigo', 'Dep Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('dep_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dep_codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('dep_nombre') ? 'has-error' : ''}}">
                {!! Form::label('dep_nombre', 'Dep Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('dep_nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dep_nombre', '<p class="help-block">:message</p>') !!}
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