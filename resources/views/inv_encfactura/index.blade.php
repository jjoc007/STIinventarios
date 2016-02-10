<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">
		
    <h2>Inv_encfactura </h2>
	
	{!! Form::open(['route' => 'inv_encfactura.index', 'method'=>'GET', 'class' => 'form-horizontal']) !!}
			<div class="form-group {{ $errors->has('efa_documento') ? 'has-error' : ''}}">
                {!! Form::label('efa_documento', 'Efa Documento: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('efa_documento', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('efa_documento', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('efa_numero') ? 'has-error' : ''}}">
                {!! Form::label('efa_numero', 'Efa Numero: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('efa_numero', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('efa_numero', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            
     <button type="submit" class="btn btn-primary pull-right" style="margin:1em 0em;">Buscar</button>
    {!! Form::close() !!}
	
	<a href="{{ route('inv_encfactura.create') }}">
                    <button class="btn btn-primary pull-right" style="margin:1em 0em;">Registrar</button>
                  </a>
	
	
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th>
					<th>
					
					 @if ($sortby == 'efa_sucursal' && $order == 'asc') {!! link_to_action(
                               'inv_encfacturaController@index',
                               'efa_sucursal',
                               array(
                                   'sortby' => 'efa_sucursal',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_encfacturaController@index',
                               'efa_sucursal',
                               array(
                                   'sortby' => 'efa_sucursal',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif
					
					
					</th>
					<th> @if ($sortby == 'efa_documento' && $order == 'asc') {!! link_to_action(
                               'inv_encfacturaController@index',
                               'efa_documento ',
                               array(
                                   'sortby' => 'efa_documento',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_encfacturaController@index',
                               'efa_documento',
                               array(
                                   'sortby' => 'efa_documento',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif</th>
					<th>@if ($sortby == 'efa_numero' && $order == 'asc') {!! link_to_action(
                               'inv_encfacturaController@index',
                               'efa_numero',
                               array(
                                   'sortby' => 'efa_numero',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_encfacturaController@index',
                               'efa_numero',
                               array(
                                   'sortby' => 'efa_numero',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif</th>
					<th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($inv_encfactura as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('inv_encfactura', $item->id) }}">{{ $item->efa_sucursal }}</a></td><td>{{ $item->efa_documento }}</td><td>{{ $item->efa_numero }}</td>
                    <td>
                        <a href="{{ url('inv_encfactura/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['inv_encfactura', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div align="center"> {!! $inv_encfactura->appends(['sortby' => $sortby, 'order' => $order ])->render() !!} </div>
    </div>
      </div>
    </div>
</div>