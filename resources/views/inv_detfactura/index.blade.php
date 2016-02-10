<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">

    <h2>Inv_detfactura</h2>
	{!! Form::open(['route' => 'inv_detfactura.index', 'method'=>'GET', 'class' => 'form-horizontal']) !!}
                <div class="form-group {{ $errors->has('dfa_sucursal') ? 'has-error' : ''}}">
                {!! Form::label('dfa_sucursal', 'Dfa Sucursal: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('dfa_sucursal', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dfa_sucursal', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('dfa_documento') ? 'has-error' : ''}}">
                {!! Form::label('dfa_documento', 'Dfa Documento: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('dfa_documento', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dfa_documento', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
			<div class="form-group {{ $errors->has('dfa_usuario') ? 'has-error' : ''}}">
                {!! Form::label('dfa_usuario', 'Dfa Usuario: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('dfa_usuario', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dfa_usuario', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            
     <button type="submit" class="btn btn-primary pull-right" style="margin:1em 0em;">Buscar</button>
    {!! Form::close() !!}
	
	<a href="{{ route('inv_detfactura.create') }}">
                    <button class="btn btn-primary pull-right" style="margin:1em 0em;">Registrar</button>
                  </a>
	
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th>
					<th>
					
					 @if ($sortby == 'dfa_sucursal' && $order == 'asc') {!! link_to_action(
                               'inv_detfacturaController@index',
                               'dfa_sucursal',
                               array(
                                   'sortby' => 'dfa_sucursal',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_detfacturaController@index',
                               'dfa_sucursal',
                               array(
                                   'sortby' => 'dfa_sucursal',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif				
					</th>
					<th> @if ($sortby == 'dfa_documento' && $order == 'asc') {!! link_to_action(
                               'inv_detfacturaController@index',
                               'dfa_documento ',
                               array(
                                   'sortby' => 'dfa_documento',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_detfacturaController@index',
                               'dfa_documento',
                               array(
                                   'sortby' => 'dfa_documento',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif
					</th>
					<th>@if ($sortby == 'dfa_usuario' && $order == 'asc') {!! link_to_action(
                               'inv_detfacturaController@index',
                               'dfa_usuario',
                               array(
                                   'sortby' => 'dfa_usuario',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_detfacturaController@index',
                               'dfa_usuario',
                               array(
                                   'sortby' => 'dfa_usuario',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif</th>
					<th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($inv_detfactura as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('inv_detfactura', $item->id) }}">{{ $item->dfa_sucursal }}</a></td><td>{{ $item->dfa_documento }}</td><td>{{ $item->dfa_usuario }}</td>
                    <td>
                        <a href="{{ url('inv_detfactura/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['inv_detfactura', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div align="center"> {!! $inv_detfactura->appends(['sortby' => $sortby, 'order' => $order ])->render() !!} </div>
    </div>
      </div>
    </div>
</div>