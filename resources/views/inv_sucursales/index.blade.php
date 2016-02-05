
<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">

    <h2>Inv_sucursales </h2>
    
	
	    
{!! Form::open(['route' => 'inv_sucursales.index', 'method'=>'GET', 'class' => 'form-horizontal']) !!}
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

     <button type="submit" class="btn btn-primary pull-right" style="margin:1em 0em;">Buscar</button>
    {!! Form::close() !!}
	
	<a href="{{ route('inv_sucursales.create') }}">
                    <button class="btn btn-primary pull-right" style="margin:1em 0em;">Registrar</button>
                  </a>
	
	
	<div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th>
					<th>
					
					 @if ($sortby == 'suc_codigo' && $order == 'asc') {!! link_to_action(
                               'inv_sucursalesController@index',
                               'Codigo',
                               array(
                                   'sortby' => 'suc_codigo',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_sucursalesController@index',
                               'Codigo',
                               array(
                                   'sortby' => 'suc_codigo',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif
					
					
					</th>
					<th> @if ($sortby == 'suc_nombre' && $order == 'asc') {!! link_to_action(
                               'inv_sucursalesController@index',
                               'Nombre ',
                               array(
                                   'sortby' => 'suc_nombre',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_sucursalesController@index',
                               'Nombre',
                               array(
                                   'sortby' => 'suc_nombre',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif</th>
					<th>@if ($sortby == 'suc_direccion' && $order == 'asc') {!! link_to_action(
                               'inv_sucursalesController@index',
                               'Direccion ',
                               array(
                                   'sortby' => 'suc_direccion',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_sucursalesController@index',
                               'Direccion',
                               array(
                                   'sortby' => 'suc_direccion',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif</th>
					<th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($inv_sucursales as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('inv_sucursales', $item->id) }}">{{ $item->suc_codigo }}</a></td><td>{{ $item->suc_nombre }}</td><td>{{ $item->suc_direccion }}</td>
                    <td>
                        <a href="{{ url('inv_sucursales/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['inv_sucursales', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div align="center"> {!! $inv_sucursales->appends(['sortby' => $sortby, 'order' => $order ])->render() !!} </div>
    </div>
      </div>
    </div>
</div>