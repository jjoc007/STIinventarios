  

<div class="content">
    <div class="row">
        <div class="col-sm-8 main-content">
             <h2>inv_catarticu</h2>
             <a href="{{ route('inv_catarticu.create') }}">
                 <button class="btn btn-primary pull-right" style="margin:1em 0em;">Registrar</button>
            </a>
            <table class="table table-first-column-check table-hover">
                <thead>
                    <tr>
                      <th class="col-md-1">S.No</th>
                      <th class="col-md-2">Codigo</th>
                      <th class="col-md-8">Nombre</th>
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
        </div>
    </div>
</div>