<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">

    <h2>Inv_tercero </h2>
	
	{!! Form::open(['route' => 'inv_tercero.index', 'method'=>'GET', 'class' => 'form-horizontal']) !!}
               <div class="form-group {{ $errors->has('ter_codigo') ? 'has-error' : ''}}">
                {!! Form::label('ter_codigo', 'Ter Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ter_nombre') ? 'has-error' : ''}}">
                {!! Form::label('ter_nombre', 'Ter Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
			<div class="form-group {{ $errors->has('ter_dni') ? 'has-error' : ''}}">
                {!! Form::label('ter_dni', 'Ter Dni: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ter_dni', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ter_dni', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            
     <button type="submit" class="btn btn-primary pull-right" style="margin:1em 0em;">Buscar</button>
    {!! Form::close() !!}
	
	<a href="{{ route('inv_tercero.create') }}">
                    <button class="btn btn-primary pull-right" style="margin:1em 0em;">Registrar</button>
                  </a>
	
	
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th>
						<th>
					
					 @if ($sortby == 'ter_codigo' && $order == 'asc') {!! link_to_action(
                               'inv_terceroController@index',
                               'ter_codigo',
                               array(
                                   'sortby' => 'ter_codigo',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_terceroController@index',
                               'ter_codigo',
                               array(
                                   'sortby' => 'ter_codigo',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif
					
					
					</th>
					<th> @if ($sortby == 'ter_nombre' && $order == 'asc') {!! link_to_action(
                               'inv_terceroController@index',
                               'ter_nombre ',
                               array(
                                   'sortby' => 'ter_nombre',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_terceroController@index',
                               'ter_nombre',
                               array(
                                   'sortby' => 'ter_nombre',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif</th>
					<th>@if ($sortby == 'ter_dni' && $order == 'asc') {!! link_to_action(
                               'inv_terceroController@index',
                               'ter_dni',
                               array(
                                   'sortby' => 'ter_dni',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_terceroController@index',
                               'ter_dni',
                               array(
                                   'sortby' => 'ter_dni',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif</th>
					<th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($inv_tercero as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('inv_tercero', $item->id) }}">{{ $item->ter_codigo }}</a></td><td>{{ $item->ter_alterno }}</td><td>{{ $item->ter_digverif }}</td>
                    <td>
                        <a href="{{ url('inv_tercero/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['inv_tercero', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div align="center"> {!! $inv_tercero->appends(['sortby' => $sortby, 'order' => $order ])->render() !!} </div>
    </div>
      </div>
    </div>
</div>