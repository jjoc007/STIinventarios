<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">

    <h2>Inv_zonas</h2>
	
	{!! Form::open(['route' => 'inv_zonas.index', 'method'=>'GET', 'class' => 'form-horizontal']) !!}
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
            
     <button type="submit" class="btn btn-primary pull-right" style="margin:1em 0em;">Buscar</button>
    {!! Form::close() !!}
	
	<a href="{{ route('inv_zonas.create') }}">
                    <button class="btn btn-primary pull-right" style="margin:1em 0em;">Registrar</button>
                  </a>	
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th>					
					<th>					
					 @if ($sortby == 'zon_codigo' && $order == 'asc') {!! link_to_action(
                               'inv_zonasController@index',
                               'Codigo',
                               array(
                                   'sortby' => 'zon_codigo',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_zonasController@index',
                               'Codigo',
                               array(
                                   'sortby' => 'zon_codigo',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif					
					</th>
					<th> @if ($sortby == 'zon_nombre' && $order == 'asc') {!! link_to_action(
                               'inv_zonasController@index',
                               'Nombre ',
                               array(
                                   'sortby' => 'zon_nombre',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_zonasController@index',
                               'Nombre',
                               array(
                                   'sortby' => 'zon_nombre',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif</th>
					   <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($inv_zonas as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('inv_zonas', $item->id) }}">{{ $item->zon_codigo }}</a></td><td>{{ $item->zon_nombre }}</td>
                    <td>
                        <a href="{{ url('inv_zonas/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['inv_zonas', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div align="center"> {!! $inv_zonas->appends(['sortby' => $sortby, 'order' => $order ])->render() !!} </div>
    </div>
      </div>
    </div>
</div>