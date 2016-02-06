<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">
		
    <h2>Inv_documentos </h2>
	
	{!! Form::open(['route' => 'inv_documentos.index', 'method'=>'GET', 'class' => 'form-horizontal']) !!}
            <div class="form-group {{ $errors->has('doc_codigo') ? 'has-error' : ''}}">
                {!! Form::label('doc_codigo', 'Cod. Docu.: ', ['class' => 'col-sm-3 control-label']) !!}
            <div class="col-sm-6">
                   {!! Form::text('doc_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('doc_codigo', '<p class="help-block">:message</p>') !!}
            </div>
            </div>
            <div class="form-group {{ $errors->has('doc_descripcion') ? 'has-error' : ''}}">
                {!! Form::label('doc_descripcion', 'Desc. Doc', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('doc_descripcion', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('doc_descripcion', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('doc_clase') ? 'has-error' : ''}}">
                {!! Form::label('doc_clase', 'Clase Doc.', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('doc_clase', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('doc_clase', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
			
			
			<button type="submit" class="btn btn-primary pull-right" style="margin:1em 0em;">Buscar</button>
    {!! Form::close() !!}
	
	<a href="{{ route('inv_documentos.create') }}">
                    <button class="btn btn-primary pull-right" style="margin:1em 0em;">Registrar</button>
                  </a>
		
	
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th>
					<th>					
					 @if ($sortby == 'doc_codigo' && $order == 'asc') {!! link_to_action(
                               'inv_documentosController@index',
                               'Codigo',
                               array(
                                   'sortby' => 'doc_codigo',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_documentosController@index',
                               'Codigo',
                               array(
                                   'sortby' => 'doc_codigo',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif	
					</th>
					<th>					
					 @if ($sortby == 'doc_descripcion' && $order == 'asc') {!! link_to_action(
                               'inv_documentosController@index',
                               'Descripcion',
                               array(
                                   'sortby' => 'doc_descripcion',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_documentosController@index',
                               'Descripcion',
                               array(
                                   'sortby' => 'doc_descripcion',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif	
					</th>
					<th>					
					 @if ($sortby == 'doc_clase' && $order == 'asc') {!! link_to_action(
                               'inv_documentosController@index',
                               'Clase',
                               array(
                                   'sortby' => 'doc_clase',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_documentosController@index',
                               'Clase',
                               array(
                                   'sortby' => 'doc_clase',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif	
					</th>
					
					<th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($inv_documentos as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('inv_documentos', $item->id) }}">{{ $item->doc_codigo }}</a></td>
					<td>{{ $item->doc_descripcion }}</td>
					<td>{{ $item->doc_clase }}</td>
                    <td>
                        <a href="{{ url('inv_documentos/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['inv_documentos', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
            <div align="center"> {!! $inv_documentos->appends(['sortby' => $sortby, 'order' => $order ])->render() !!} </div>
    </div>
      </div>
    </div>
</div>
