<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">

    <h2>Inv_imptoart </h2>
    
	{!! Form::open(['route' => 'inv_imptoart.index', 'method'=>'GET', 'class' => 'form-horizontal']) !!}
               <div class="form-group {{ $errors->has('ima_articulo') ? 'has-error' : ''}}">
                {!! Form::label('ima_articulo', 'Ima Articulo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ima_articulo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ima_articulo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ima_codigo') ? 'has-error' : ''}}">
                {!! Form::label('ima_codigo', 'Ima Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ima_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ima_codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ima_nom') ? 'has-error' : ''}}">
                {!! Form::label('ima_nom', 'Ima Nom: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ima_nom', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ima_nom', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

     <button type="submit" class="btn btn-primary pull-right" style="margin:1em 0em;">Buscar</button>
    {!! Form::close() !!}
	
	<a href="{{ route('inv_imptoart.create') }}">
                    <button class="btn btn-primary pull-right" style="margin:1em 0em;">Registrar</button>
                  </a>
	
	
	<div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th>
					<th>
					
					 @if ($sortby == 'ima_articulo' && $order == 'asc') {!! link_to_action(
                               'inv_imptoartController@index',
                               'ima_articulo',
                               array(
                                   'sortby' => 'ima_articulo',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_imptoartController@index',
                               'ima_articulo',
                               array(
                                   'sortby' => 'ima_articulo',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif
					
					
					</th>
					<th> @if ($sortby == 'ima_codigo' && $order == 'asc') {!! link_to_action(
                               'inv_imptoartController@index',
                               'ima_codigo ',
                               array(
                                   'sortby' => 'ima_codigo',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_imptoartController@index',
                               'ima_codigo',
                               array(
                                   'sortby' => 'ima_codigo',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif</th>
					<th>@if ($sortby == 'ima_nom' && $order == 'asc') {!! link_to_action(
                               'inv_imptoartController@index',
                               'ima_nom ',
                               array(
                                   'sortby' => 'ima_nom',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_imptoartController@index',
                               'ima_nom',
                               array(
                                   'sortby' => 'ima_nom',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif</th>
					<th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($inv_imptoart as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('inv_imptoart', $item->id) }}">{{ $item->ima_articulo }}</a></td><td>{{ $item->ima_codigo }}</td><td>{{ $item->ima_nom }}</td>
                    <td>
                        <a href="{{ url('inv_imptoart/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['inv_imptoart', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
         <div align="center"> {!! $inv_imptoart->appends(['sortby' => $sortby, 'order' => $order ])->render() !!} </div>
    </div>
      </div>
    </div>
</div>