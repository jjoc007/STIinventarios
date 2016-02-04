  

<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">


    <h2>Inv_almacenes </h2>


 {!! Form::open(['route' => 'inv_almacenes.index', 'method'=>'GET', 'class' => 'form-horizontal']) !!}


 <div class="form-group {{ $errors->has('alm_codigo') ? 'has-error' : ''}}">
                {!! Form::label('alm_codigo', 'Alm Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('alm_codigo', null, ['class' => 'form-control']) !!}
                    
                </div>
            </div>
            <div class="form-group {{ $errors->has('alm_nombre') ? 'has-error' : ''}}">
                {!! Form::label('alm_nombre', 'Alm Nombre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('alm_nombre', null, ['class' => 'form-control']) !!}
                    
                </div>
            </div>

                  <button type="submit" class="btn btn-primary pull-right" style="margin:1em 0em;">Buscar</button>
                    
              {!! Form::close() !!}

                  <a href="{{ route('inv_almacenes.create') }}">
                    <button class="btn btn-primary pull-right" style="margin:1em 0em;">Registrar</button>
                  </a>




    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>

                        @if ($sortby == 'alm_codigo' && $order == 'asc') {!! link_to_action(
                               'inv_almacenesController@index',
                               'Codigo',
                               array(
                                   'sortby' => 'alm_codigo',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_almacenesController@index',
                               'Codigo',
                               array(
                                   'sortby' => 'alm_codigo',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif

                    </th>
                    <th>
                        @if ($sortby == 'alm_nombre' && $order == 'asc') {!! link_to_action(
                               'inv_almacenesController@index',
                               'Nombre ',
                               array(
                                   'sortby' => 'alm_nombre',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_almacenesController@index',
                               'Nombre',
                               array(
                                   'sortby' => 'alm_nombre',
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
            @foreach($inv_almacenes as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td><a href="{{ url('inv_almacenes', $item->id) }}">{{ $item->alm_codigo }}</a></td><td>{{ $item->alm_nombre }}</td>
                    <td>
                        <a href="{{ url('inv_almacenes/' . $item->id . '/edit') }}">
                            <button type="submit" class="btn btn-primary btn-xs">Update</button>
                        </a> /
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['inv_almacenes', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination"> {!! $inv_almacenes->appends(['sortby' => $sortby, 'order' => $order ])->render() !!} </div>
    </div>
 </div>
        </div>
    </div>
