<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">

    <h2>Inv_controlart </h2>
   
{!! Form::open(['route' => 'inv_controlart.index', 'method'=>'GET', 'class' => 'form-horizontal']) !!}
                <div class="form-group {{ $errors->has('ctl_articulo') ? 'has-error' : ''}}">
                {!! Form::label('ctl_articulo', 'Ctl Articulo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ctl_articulo', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ctl_articulo', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ctl_cantstock') ? 'has-error' : ''}}">
                {!! Form::label('ctl_cantstock', 'Ctl Cantstock: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('ctl_cantstock', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('ctl_cantstock', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            
     <button type="submit" class="btn btn-primary pull-right" style="margin:1em 0em;">Buscar</button>
    {!! Form::close() !!}
	
	<a href="{{ route('inv_controlart.create') }}">
                    <button class="btn btn-primary pull-right" style="margin:1em 0em;">Registrar</button>
                  </a>

   <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>
					
					 @if ($sortby == 'ctl_articulo' && $order == 'asc') {!! link_to_action(
                               'inv_controlartController@index',
                               'ctl_articulo',
                               array(
                                   'sortby' => 'ctl_articulo',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_controlartController@index',
                               'ctl_articulo',
                               array(
                                   'sortby' => 'ctl_articulo',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif
					
					
					</th>
					<th> @if ($sortby == 'ctl_cantstock' && $order == 'asc') {!! link_to_action(
                               'inv_controlartController@index',
                               'ctl_cantstock ',
                               array(
                                   'sortby' => 'ctl_cantstock',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_controlartController@index',
                               'ctl_cantstock',
                               array(
                                   'sortby' => 'ctl_cantstock',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif</th>
					   <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($inv_controlart as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('inv_controlart', $item->id) }}">{{ $item->ctl_articulo }}</a></td><td>{{ $item->ctl_cantstock }}</td>
                    <td>
                        <a href="{{ url('inv_controlart/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['inv_controlart', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
       <div align="center"> {!! $inv_controlart->appends(['sortby' => $sortby, 'order' => $order ])->render() !!} </div>
    </div>
      </div>
    </div>
</div>