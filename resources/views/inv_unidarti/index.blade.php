<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">

    <h2>Inv_unidarti </h2>
    
	{!! Form::open(['route' => 'inv_unidarti.index', 'method'=>'GET', 'class' => 'form-horizontal']) !!}
                <div class="form-group {{ $errors->has('uni_articulo') ? 'has-error' : ''}}">
                {!! Form::label('uni_articulo', 'Uni Articulo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('uni_articulo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('uni_articulo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
             <div class="form-group {{ $errors->has('uni_usuario') ? 'has-error' : ''}}">
                {!! Form::label('uni_usuario', 'Uni Usuario: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('uni_usuario', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('uni_usuario', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            
     <button type="submit" class="btn btn-primary pull-right" style="margin:1em 0em;">Buscar</button>
    {!! Form::close() !!}
	
	<a href="{{ route('inv_unidarti.create') }}">
                    <button class="btn btn-primary pull-right" style="margin:1em 0em;">Registrar</button>
                  </a>
	
	
	<div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>
					
					 @if ($sortby == 'uni_articulo' && $order == 'asc') {!! link_to_action(
                               'inv_unidartiController@index',
                               'uni_articulo',
                               array(
                                   'sortby' => 'uni_articulo',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_unidartiController@index',
                               'uni_articulo',
                               array(
                                   'sortby' => 'uni_articulo',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif
					
					
					</th>
					<th> @if ($sortby == 'uni_usuario' && $order == 'asc') {!! link_to_action(
                               'inv_unidartiController@index',
                               'uni_usuario ',
                               array(
                                   'sortby' => 'uni_usuario',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_unidartiController@index',
                               'uni_usuario',
                               array(
                                   'sortby' => 'uni_usuario',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif</th>
					   <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($inv_unidarti as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('inv_unidarti', $item->id) }}">{{ $item->uni_articulo }}</a></td><td>{{ $item->uni_usuario }}</td>
                    <td>
                        <a href="{{ url('inv_unidarti/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['inv_unidarti', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div align="center"> {!! $inv_unidarti->appends(['sortby' => $sortby, 'order' => $order ])->render() !!} </div>
    </div>
      </div>
    </div>
</div>