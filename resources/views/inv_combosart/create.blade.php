<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">
		
    <h2>Create New Inv_combosart</h2>
    <hr/>

    {!! Form::open(['url' => 'inv_combosart', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('cmb_codigo') ? 'has-error' : ''}}">
                {!! Form::label('cmb_codigo', 'Cmb Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('cmb_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('cmb_codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('cmb_nombre') ? 'has-error' : ''}}">
                {!! Form::label('cmb_nombre', 'Cmb Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('cmb_nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('cmb_nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('cmb_fecdesde') ? 'has-error' : ''}}">
                {!! Form::label('cmb_fecdesde', 'Cmb Fecdesde: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'cmb_fecdesde', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('cmb_fecdesde', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('cmb_fechasta') ? 'has-error' : ''}}">
                {!! Form::label('cmb_fechasta', 'Cmb Fechasta: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'cmb_fechasta', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('cmb_fechasta', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('cmb_usuario') ? 'has-error' : ''}}">
                {!! Form::label('cmb_usuario', 'Cmb Usuario: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('cmb_usuario', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('cmb_usuario', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('cmb_fecaud') ? 'has-error' : ''}}">
                {!! Form::label('cmb_fecaud', 'Cmb Fecaud: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('datetime-local', 'cmb_fecaud', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('cmb_fecaud', '<p class="help-block">:message</p>') !!}
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