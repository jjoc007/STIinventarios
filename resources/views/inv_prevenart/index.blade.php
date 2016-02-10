<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">


    <h2>Inv_prevenart </h2>
	
	{!! Form::open(['route' => 'inv_prevenart.index', 'method'=>'GET', 'class' => 'form-horizontal']) !!}
              <div class="form-group {{ $errors->has('prv_codigo') ? 'has-error' : ''}}">
                {!! Form::label('prv_codigo', 'Prv Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('prv_codigo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('prv_codigo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('prv_usuario') ? 'has-error' : ''}}">
                {!! Form::label('prv_usuario', 'Prv Usuario: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('prv_usuario', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('prv_usuario', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            
     <button type="submit" class="btn btn-primary pull-right" style="margin:1em 0em;">Buscar</button>
    {!! Form::close() !!}
	
	<a href="{{ route('inv_prevenart.create') }}">
                    <button class="btn btn-primary pull-right" style="margin:1em 0em;">Registrar</button>
                  </a>
	
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th>
					<th>
					
					 @if ($sortby == 'prv_codigo' && $order == 'asc') {!! link_to_action(
                               'inv_prevenartController@index',
                               'Codigo',
                               array(
                                   'sortby' => 'prv_codigo',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_prevenartController@index',
                               'Codigo',
                               array(
                                   'sortby' => 'prv_codigo',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif
					
					
					</th>
					<th> @if ($sortby == 'prv_usuario' && $order == 'asc') {!! link_to_action(
                               'inv_prevenartController@index',
                               'prv_usuario ',
                               array(
                                   'sortby' => 'prv_usuario',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_prevenartController@index',
                               'prv_usuario',
                               array(
                                   'sortby' => 'prv_usuario',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif</th>
					<th>@if ($sortby == 'prv_intervenini' && $order == 'asc') {!! link_to_action(
                               'inv_prevenartController@index',
                               'prv_intervenini',
                               array(
                                   'sortby' => 'prv_intervenini',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_prevenartController@index',
                               'prv_intervenini',
                               array(
                                   'sortby' => 'prv_intervenini',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif</th>
					<th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($inv_prevenart as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('inv_prevenart', $item->id) }}">{{ $item->prv_codigo }}</a></td><td>{{ $item->prv_usuario }}</td><td>{{ $item->prv_intervenini }}</td>
                    <td>
                        <a href="{{ url('inv_prevenart/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['inv_prevenart', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div align="center"> {!! $inv_prevenart->appends(['sortby' => $sortby, 'order' => $order ])->render() !!} </div>
    </div>
      </div>
    </div>
</div>