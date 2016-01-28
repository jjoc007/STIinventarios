  

<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">
             <h2>inv_catarticu</h2>
             

              {!! Form::open(['route' => 'inv_catarticu.index', 'method'=>'GET', 'class' => 'form-horizontal']) !!}

                  <div class="form-group {{ $errors->has('cat_codigo') ? 'has-error' : ''}}">
                {!! Form::label('cat_codigo', 'Cat Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('cat_codigo', null, ['class' => 'form-control', 'placeholder'=>'Codigo'])!!}
                  </div>
                </div>

<div class="form-group {{ $errors->has('cat_codigo') ? 'has-error' : ''}}">
                {!! Form::label('cat', 'Cat Codigo: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">

                    {!! Form::text('cat_nombre', null, ['class' => 'form-control', 'placeholder'=>'Nombre'])!!}
                  </div>
                </div>

                  <button type="submit" class="btn btn-primary pull-right" style="margin:1em 0em;">Buscar</button>
                    
              {!! Form::close() !!}

                  <a href="{{ route('inv_catarticu.create') }}">
                    <button class="btn btn-primary pull-right" style="margin:1em 0em;">Registrar</button>
                  </a>


           
            <table class="table table-first-column-check table-hover">
                <thead>
                    <tr>
                      <th class="col-md-1">S.No</th>
                      <th class="col-md-2">
                        
                       @if ($sortby == 'cat_codigo' && $order == 'asc') {!! link_to_action(
                               'inv_catarticuController@index',
                               'Codigo',
                               array(
                                   'sortby' => 'cat_codigo',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_catarticuController@index',
                               'Codigo',
                               array(
                                   'sortby' => 'cat_codigo',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif
                      </th>
                      <th class="col-md-8">
                      @if ($sortby == 'cat_nombre' && $order == 'asc') {!! link_to_action(
                               'inv_catarticuController@index',
                               'Nombre ',
                               array(
                                   'sortby' => 'cat_nombre',
                                   'order' => 'desc'
                               )
                           ) !!}
                       @else {!! link_to_action(
                               'inv_catarticuController@index',
                               'Nombre',
                               array(
                                   'sortby' => 'cat_nombre',
                                   'order' => 'asc'
                               )
                           )!!}
                       @endif</th>
                      <th class="col-md-3">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                   
                    <tr>
                     
                      {{-- */$x=0;/* --}}
                        @foreach($inv_catarticus as $item)
                            {{-- */$x++;/* --}}
                            <tr>
                                <td>{{ $x }}</td>
                                <td><a href="{{ url('/inv_catarticu', $item->id) }}">{{ $item->cat_codigo }}</a></td><td>{{ $item->cat_nombre }}</td>
                                <td>
                                    <a href="{{ route('inv_catarticu.edit', $item->id) }}">
                                        <button type="submit" class="btn btn-primary btn-xs">Update</button>
                                    </a> /
                                    {!! Form::open([
                                        'method'=>'DELETE',
                                        'route' => ['inv_catarticu.destroy', $item->id],
                                        'style' => 'display:inline'
                                    ]) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tr>
                  
                </tbody>
            </table>
            <div align="center">
            {!!$inv_catarticus->appends(['sortby' => $sortby, 'order' => $order ])->render()!!}
        </div>
        </div>
    </div>
</div>