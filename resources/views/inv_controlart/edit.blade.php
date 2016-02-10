 <div class="content">
    <div class="row">
        <div class="col-sm-8 main-content"> 
    <h2>Edit Inv_controlart</h2>
    <hr/>

    {!! Form::model($inv_controlart, [
        'method' => 'PATCH',
        'url' => ['inv_controlart', $inv_controlart->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('ctl_articulo') ? 'has-error' : ''}}">
                {!! Form::label('ctl_articulo', 'Ctl Articulo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ctl_articulo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ctl_articulo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ctl_cantstock') ? 'has-error' : ''}}">
                {!! Form::label('ctl_cantstock', 'Ctl Cantstock: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('ctl_cantstock', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ctl_cantstock', '<p class="help-block">:message</p>') !!}
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