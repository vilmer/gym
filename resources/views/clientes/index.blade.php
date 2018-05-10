@extends('layouts.app')

@section('content')
<div class="sec-spacer">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Administracion de clientes
                        <a href="{{route('nuevoCliente')}}">Nuevo cliente</a>
                    </div>

                    <div class="card-body">
                       <table data-toggle="table" class="table table-striped" data-pagination="true" data-search="true" data-show-columns="true" data-show-refresh="true" data-buttons-class="info" data-icons-prefix="fa"  >
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nombres</th>
                              <th scope="col">Apellidos</th>
                              <th scope="col">Télefono</th>
                              <th scope="col">Email</th>
                              <th scope="col">Acción</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php($i=0)
                            @foreach($clientes as $cli)
                            @php($i++)
                            <tr >
                              <td >{{$i}}</th>
                              <td>{{$cli->nombre}}</td>
                              <td>{{$cli->apellido}}</td>
                              <td>{{$cli->telefono}}</td>
                                <td>{{$cli->email}}</td>
                                <td>
                                    <a href="{{route('editarCliente',['clave'=>$cli->id])}}" class="btn btn-info">Editar</a>
                                    <button class="btn btn-danger" type="button" onclick="eliminar(this);" data-url="{{route('eliminarCliente',['clave'=>$cli->id])}}" >Eliminar</button>
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
  $('#m_cliente').addClass('active');


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
