<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">

    <h2>Inv_formpagos</h2>
	
	
	{!! Form::open(['route' => 'inv_formpagos.index', 'method'=>'GET', 'class' => 'form-horizontal']) !!}
                <div class="form-group {{ $errors->has('fmp_codigo') ? 'has-error' : ''}}">
                {!! Form::label('fmp_codigo', 'Cod. Forma Pago: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('fmp_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fmp_codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fmp_nombre') ? 'has-error' : ''}}">
                {!! Form::label('fmp_nombre', 'Nom Forma Pago: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('fmp_nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fmp_nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fmp_tipo') ? 'has-error' : ''}}">
                {!! Form::label('fmp_tipo', 'Tipo Forma Pago: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('fmp_tipo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fmp_tipo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

     <button type="submit" class="btn btn-primary pull-right" style="margin:1em 0em;">Buscar</button>
    {!! Form::close() !!}
	
	<a href="{{ route('inv_formpagos.create') }}">
                    <button class="btn btn-primary pull-right" style="margin:1em 0em;">Registrar</button>
                  </a>
			
	
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th>
					<th>
					
					 @if ($sortby == 'fmp_codigo' && $order == 'asc') {!! link_to_action(
                               'inv_formpagosController@index',
                               'Codigo Forma Pago',
                               array(
                                   'sortby' => 'fmp_codigo',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_formpagosController@index',
                               'Codigo Forma Pago',
                               array(
                                   'sortby' => 'fmp_codigo',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif
					
					
					</th>
					<th> @if ($sortby == 'fmp_nombre' && $order == 'asc') {!! link_to_action(
                               'inv_formpagosController@index',
                               'Nombre Forma Pago ',
                               array(
                                   'sortby' => 'fmp_nombre',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_formpagosController@index',
                               'Nombre Forma Pago',
                               array(
                                   'sortby' => 'fmp_nombre',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif</th>
					<th>@if ($sortby == 'fmp_tipo' && $order == 'asc') {!! link_to_action(
                               'inv_formpagosController@index',
                               'Tipo Forma Pago',
                               array(
                                   'sortby' => 'fmp_tipo',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_formpagosController@index',
                               'Tipo Forma Pago',
                               array(
                                   'sortby' => 'fmp_tipo',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif</th>
					<th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($inv_formpagos as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('inv_formpagos', $item->id) }}">{{ $item->fmp_codigo }}</a></td><td>{{ $item->fmp_nombre }}</td><td>{{ $item->fmp_tipo }}</td>
                    <td>
                        <a href="{{ url('inv_formpagos/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['inv_formpagos', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
          <div align="center"> {!! $inv_formpagos->appends(['sortby' => $sortby, 'order' => $order ])->render() !!} </div>
    </div>
      </div>
    </div>
</div>