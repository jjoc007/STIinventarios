
<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">

      <h2>Inv_Departamentos </h2>
    
	{!! Form::open(['route' => 'inv_departamento.index', 'method'=>'GET', 'class' => 'form-horizontal']) !!}
                <div class="form-group {{ $errors->has('dep_codigo') ? 'has-error' : ''}}">
                {!! Form::label('dep_codigo', 'Dep Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('dep_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dep_codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('dep_nombre') ? 'has-error' : ''}}">
                {!! Form::label('dep_nombre', 'Dep Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('dep_nombre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('dep_nombre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
           
     <button type="submit" class="btn btn-primary pull-right" style="margin:1em 0em;">Buscar</button>
    {!! Form::close() !!}
	
	<a href="{{ route('inv_departamento.create') }}">
                    <button class="btn btn-primary pull-right" style="margin:1em 0em;">Registrar</button>
                  </a>
	
	<div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th>
				
					<th>
					
					 @if ($sortby == 'dep_codigo' && $order == 'asc') {!! link_to_action(
                               'inv_departamentoController@index',
                               'Codigo',
                               array(
                                   'sortby' => 'dep_codigo',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_departamentoController@index',
                               'Codigo',
                               array(
                                   'sortby' => 'dep_codigo',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif
					
					
					</th>
					<th> @if ($sortby == 'dep_nombre' && $order == 'asc') {!! link_to_action(
                               'inv_departamentoController@index',
                               'Nombre ',
                               array(
                                   'sortby' => 'dep_nombre',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_departamentoController@index',
                               'Nombre',
                               array(
                                   'sortby' => 'dep_nombre',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif</th>
					   <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($inv_departamento as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('inv_departamento', $item->id) }}">{{ $item->dep_codigo }}</a></td><td>{{ $item->dep_nombre }}</td>
                    <td>
                        <a href="{{ url('inv_departamento/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['inv_departamento', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div align="center"> {!! $inv_departamento->appends(['sortby' => $sortby, 'order' => $order ])->render() !!} </div>
    </div>
      </div>
    </div>
</div>