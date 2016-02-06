<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">

    <h2>Inv_ciudades </h2>
	
	{!! Form::open(['route' => 'inv_ciudades.index', 'method'=>'GET', 'class' => 'form-horizontal']) !!}
                <div class="form-group {{ $errors->has('ciu_depart') ? 'has-error' : ''}}">
                {!! Form::label('ciu_depart', 'Cod. Depart: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ciu_depart', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ciu_depart', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ciu_codigo') ? 'has-error' : ''}}">
                {!! Form::label('ciu_codigo', 'Cod. Ciudad: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ciu_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ciu_codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ciu_nombre') ? 'has-error' : ''}}">
                {!! Form::label('ciu_nombre', 'Cod. Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ciu_nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ciu_nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

     <button type="submit" class="btn btn-primary pull-right" style="margin:1em 0em;">Buscar</button>
    {!! Form::close() !!}
	
	<a href="{{ route('inv_ciudades.create') }}">
                    <button class="btn btn-primary pull-right" style="margin:1em 0em;">Registrar</button>
                  </a>
		
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
               <tr>
                    <th>S.No</th>
					<th>
					
					 @if ($sortby == 'ciu_depart' && $order == 'asc') {!! link_to_action(
                               'inv_ciudadesController@index',
                               'Codigo',
                               array(
                                   'sortby' => 'ciu_depart',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_ciudadesController@index',
                               'Codigo',
                               array(
                                   'sortby' => 'ciu_depart',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif
					
					
					</th>
					<th> @if ($sortby == 'ciu_codigo' && $order == 'asc') {!! link_to_action(
                               'inv_ciudadesController@index',
                               'Nombre ',
                               array(
                                   'sortby' => 'ciu_codigo',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_ciudadesController@index',
                               'Nombre',
                               array(
                                   'sortby' => 'ciu_codigo',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif</th>
					<th>@if ($sortby == 'ciu_nombre' && $order == 'asc') {!! link_to_action(
                               'inv_ciudadesController@index',
                               'Direccion ',
                               array(
                                   'sortby' => 'ciu_nombre',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_ciudadesController@index',
                               'Direccion',
                               array(
                                   'sortby' => 'ciu_nombre',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif</th>
					<th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($inv_ciudades as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('inv_ciudades', $item->id) }}">{{ $item->ciu_depart }}</a></td><td>{{ $item->ciu_codigo }}</td><td>{{ $item->ciu_nombre }}</td>
                    <td>
                        <a href="{{ url('inv_ciudades/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['inv_ciudades', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
         <div align="center"> {!! $inv_ciudades->appends(['sortby' => $sortby, 'order' => $order ])->render() !!} </div>
    </div>
      </div>
    </div>
</div>