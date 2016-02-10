<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">

    <h2>Inv_articulos</h2>
    
	{!! Form::open(['route' => 'inv_articulos.index', 'method'=>'GET', 'class' => 'form-horizontal']) !!}
                <div class="form-group {{ $errors->has('art_codigo') ? 'has-error' : ''}}">
                {!! Form::label('art_codigo', 'Art Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('art_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_nombre') ? 'has-error' : ''}}">
                {!! Form::label('art_nombre', 'Art Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('art_nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('art_referencia') ? 'has-error' : ''}}">
                {!! Form::label('art_referencia', 'Art Referencia: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('art_referencia', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('art_referencia', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            
     <button type="submit" class="btn btn-primary pull-right" style="margin:1em 0em;">Buscar</button>
    {!! Form::close() !!}
	
	<a href="{{ route('inv_articulos.create') }}">
                    <button class="btn btn-primary pull-right" style="margin:1em 0em;">Registrar</button>
                  </a>
				  
	<div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>
					
					 @if ($sortby == 'art_codigo' && $order == 'asc') {!! link_to_action(
                               'inv_articulosController@index',
                               'art_codigo',
                               array(
                                   'sortby' => 'art_codigo',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_articulosController@index',
                               'art_codigo',
                               array(
                                   'sortby' => 'art_codigo',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif		
					</th>
					<th> @if ($sortby == 'art_nombre' && $order == 'asc') {!! link_to_action(
                               'inv_articulosController@index',
                               'art_nombre ',
                               array(
                                   'sortby' => 'art_nombre',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_articulosController@index',
                               'art_nombre',
                               array(
                                   'sortby' => 'art_nombre',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif</th>
					<th>@if ($sortby == 'art_referencia' && $order == 'asc') {!! link_to_action(
                               'inv_articulosController@index',
                               'art_referencia',
                               array(
                                   'sortby' => 'art_referencia',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_articulosController@index',
                               'art_referencia',
                               array(
                                   'sortby' => 'art_referencia',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif</th>
					<th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($inv_articulos as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('inv_articulos', $item->id) }}">{{ $item->art_codigo }}</a></td><td>{{ $item->art_nombre }}</td><td>{{ $item->art_referencia }}</td>
                    <td>
                        <a href="{{ url('inv_articulos/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['inv_articulos', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div align="center"> {!! $inv_articulos->appends(['sortby' => $sortby, 'order' => $order ])->render() !!} </div>
    </div>
      </div>
    </div>
</div>