<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">
		
    <h2>Inv_vendedor</h2>
	
	{!! Form::open(['route' => 'inv_vendedor.index', 'method'=>'GET', 'class' => 'form-horizontal']) !!}
                <div class="form-group {{ $errors->has('ven_codigo') ? 'has-error' : ''}}">
                {!! Form::label('ven_codigo', 'Ven Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ven_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ven_codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ven_nombre') ? 'has-error' : ''}}">
                {!! Form::label('ven_nombre', 'Ven Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ven_nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ven_nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ven_zona') ? 'has-error' : ''}}">
                {!! Form::label('ven_zona', 'Ven Zona: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ven_zona', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ven_zona', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            
     <button type="submit" class="btn btn-primary pull-right" style="margin:1em 0em;">Buscar</button>
    {!! Form::close() !!}
	
	<a href="{{ route('inv_vendedor.create') }}">
                    <button class="btn btn-primary pull-right" style="margin:1em 0em;">Registrar</button>
                  </a>
		
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th>
					<th>
					
					 @if ($sortby == 'ven_codigo' && $order == 'asc') {!! link_to_action(
                               'inv_vendedorController@index',
                               'Codigo',
                               array(
                                   'sortby' => 'ven_codigo',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_vendedorController@index',
                               'Codigo',
                               array(
                                   'sortby' => 'ven_codigo',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif
					
					
					</th>
					<th> @if ($sortby == 'ven_nombre' && $order == 'asc') {!! link_to_action(
                               'inv_vendedorController@index',
                               'Nombre ',
                               array(
                                   'sortby' => 'ven_nombre',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_vendedorController@index',
                               'Nombre',
                               array(
                                   'sortby' => 'ven_nombre',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif</th>
					<th>@if ($sortby == 'ven_zona' && $order == 'asc') {!! link_to_action(
                               'inv_vendedorController@index',
                               'Zona',
                               array(
                                   'sortby' => 'ven_zona',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_vendedorController@index',
                               'Zona',
                               array(
                                   'sortby' => 'ven_zona',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif</th>
					<th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($inv_vendedor as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('inv_vendedor', $item->id) }}">{{ $item->ven_codigo }}</a></td><td>{{ $item->ven_nombre }}</td><td>{{ $item->ven_zona }}</td>
                    <td>
                        <a href="{{ url('inv_vendedor/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['inv_vendedor', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div align="center"> {!! $inv_vendedor->appends(['sortby' => $sortby, 'order' => $order ])->render() !!} </div>
    </div>
      </div>
    </div>
</div>