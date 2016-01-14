<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">

    <h2>Registrar Inv_catarticu</h2>
    <hr/>

    {!! Form::open(['route' => 'inv_catarticu.store', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('cat_codigo') ? 'has-error' : ''}}">
                {!! Form::label('cat_codigo', 'Cat Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('cat_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('cat_codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('cat_nombre') ? 'has-error' : ''}}">
                {!! Form::label('cat_nombre', 'Cat Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('cat_nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('cat_nombre', '<p class="help-block">:message</p>') !!}
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