<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">

    <h2>Inv_bodegas </h2>
	
	{!! Form::open(['route' => 'inv_bodegas.index', 'method'=>'GET', 'class' => 'form-horizontal']) !!}
                
                <div class="form-group {{ $errors->has('bod_codigo') ? 'has-error' : ''}}">
                {!! Form::label('bod_codigo', 'Bod Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('bod_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('bod_codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('bod_nombre') ? 'has-error' : ''}}">
                {!! Form::label('bod_nombre', 'Bod Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('bod_nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('bod_nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            
     <button type="submit" class="btn btn-primary pull-right" style="margin:1em 0em;">Buscar</button>
    {!! Form::close() !!}
	
	<a href="{{ route('inv_bodegas.create') }}">
                    <button class="btn btn-primary pull-right" style="margin:1em 0em;">Registrar</button>
                  </a>
	
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th>
					<th>
					@if ($sortby == 'bod_codigo' && $order == 'asc') {!! link_to_action(
                               'inv_bodegasController@index',
                               'Codigo',
                               array(
                                   'sortby' => 'bod_codigo',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_bodegasController@index',
                               'Codigo',
                               array(
                                   'sortby' => 'bod_codigo',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif					
					</th>
					<th> @if ($sortby == 'bod_nombre' && $order == 'asc') {!! link_to_action(
                               'inv_bodegasController@index',
                               'Nombre ',
                               array(
                                   'sortby' => 'bod_nombre',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_bodegasController@index',
                               'Nombre',
                               array(
                                   'sortby' => 'bod_nombre',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($inv_bodegas as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('inv_bodegas', $item->id) }}">{{ $item->bod_codigo }}</a></td><td>{{ $item->bod_nombre }}</td>
                    <td>
                        <a href="{{ url('inv_bodegas/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['inv_bodegas', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div align="center"> {!! $inv_bodegas->appends(['sortby' => $sortby, 'order' => $order ])->render() !!} </div>
    </div>
      </div>
    </div>
</div>