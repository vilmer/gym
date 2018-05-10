@extends('layouts.app')

@section('content')
<div class="sec-spacer">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Administracion de maquinas
                        <a href="{{route('nuevoMaquina')}}">Nuevo maquina</a>
                    </div>

                    <div class="card-body">
                       <table data-toggle="table" class="table table-striped" data-pagination="true" data-search="true" data-show-columns="true" data-show-refresh="true" data-buttons-class="info" data-icons-prefix="fa"  >
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nombres</th>
                              <th scope="col">Cantidad</th>
                              <th scope="col">Marca</th>
                              <th scope="col">Estado</th>
                              <th scope="col">Foto</th>
                              <th scope="col">Observació</th>
                              <th scope="col">Acción</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php($i=0)
                            @foreach($maquinas as $cli)
                            @php($i++)
                            <tr >
                              <td >{{$i}}</th>
                              <td>{{$cli->nombre}}</td>
                              <td>{{$cli->cantidad}}</td>
                              <td>{{$cli->marca}}</td>
                              <td>
                                  @if($cli->estado)
                                    Activo
                                  @else
                                    Inactivo
                                  @endif
                              </td>
                              <td>
                                <img src="{{Storage::url('public/images/maquinas/'.$cli->foto)}}" alt="" width="120px;">
                              </td>
                              <td>{{$cli->observacion}}</td>

                                <td>
                                    <a href="{{route('editarMaquina',['clave'=>$cli->id])}}" class="btn btn-info">Editar</a>
                                    <button class="btn btn-danger" type="button" onclick="eliminar(this);" data-url="{{route('eliminarMaquina',['clave'=>$cli->id])}}" >Eliminar</button>
                                </td>
                            </tr>
      
                            @endforeach
                           
                          </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
  $('#m_registro').addClass('active');
  $('#m_maquina').addClass('active');


  function eliminar(argument) {
    alertify.confirm("ESTA SEGURO DE ELIMINAR.","Se perdera toda la información",
    function(){
      window.location=$(argument).data('url');
    },
    function(){
      alertify.error('Cancelado');
    });
  }
</script>
@endsection
