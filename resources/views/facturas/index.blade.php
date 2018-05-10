@extends('layouts.app')

@section('content')
<div class="sec-spacer">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Administracion de facturas
                        <a href="{{route('nuevoFactura')}}">Nuevo factura</a>
                    </div>

                    <div class="card-body">
                       <table data-toggle="table" class="table table-striped" data-pagination="true" data-search="true" data-show-columns="true" data-show-refresh="true" data-buttons-class="info" data-icons-prefix="fa"  >
                          <thead>
                            <tr>
                              
  
                              <th scope="col">#</th>
                              <th scope="col">Factura</th>
                              <th scope="col">Estado</th>
                              <th scope="col">Total</th>
                              <th scope="col">Cliente</th>
                              <th scope="col">Acción</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php($i=0)
                            @foreach($facturas as $cli)
                            @php($i++)
                            <tr >
                              <td >{{$i}}</th>
                              <td>{{$cli->factura}}</td>
                              <td>
                                @if($cli->estado)
                                  Activo
                                @else
                                  Anulado
                                @endif
                              </td>
                              <td>{{$cli->total}}</td>
                              <td>{{$cli->cliente->nombre}} {{$cli->cliente->apellido}} <small>{{$cli->cliente->cedula}}</small> </td>

                                <td>
                                    <a href="" class="btn btn-warning"><i class="fa fa-print"></i>Imprimir</a>
                                    <a href="{{route('editarProducto',['clave'=>$cli->id])}}" class="btn btn-info">Anular</a>
                                    <button class="btn btn-danger" type="button" onclick="eliminar(this);" data-url="{{route('eliminarProducto',['clave'=>$cli->id])}}" >Eliminar</button>

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
  $('#m_mensual').addClass('active');
  $('#m_factura').addClass('active');

</script>
@endsection
