@extends('layouts.app')

@section('content')
<div class="sec-spacer">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Administracion de facturas
                        <a href="{{route('nuevoFactura')}}">Nuevo factura</a>
                    </div>

                    <div class="card-body">
                       @if(Session::has('ventaok'))
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{Session::get('ventaok')['mensajeVentaOk']}}</strong>
                        
                        <a href="{{route('imprimirFacturaVenta',['clave'=>Session::get('ventaok')['idVenta']])}}" target="_blank" class="btn btn-warning btn-lg"><i class="fa fa-print"></i> IMPRIMIR FACTURA </a>

                        <button type="button" class="btn btn-danger btn-lg" data-dismiss="alert" aria-label="Close">
                          Cerrar
                        </button>
                      </div>

                      @endif
                      
                      <div class="row">
                        <div class="col-6">

                          
                        <table data-toggle="table" class="table table-striped" data-pagination="true" data-search="true" data-show-refresh="true" data-buttons-class="info" data-icons-prefix="fa"  >
                          <thead>
                            <tr>

                              <th scope="col">#</th>
                              <th scope="col">Nombres</th>
                              <th scope="col">Cantidad disponible</th>
                              
                              <th scope="col">Precio Venta</th>
                              
                              <th scope="col">Foto</th>
                              <th scope="col">Cantidad a vender</th>
                              <th scope="col">Acción</th>
                            </tr>
                          </thead>
                          <tbody>
                            @php($i=0)
                            @foreach($productos as $cli)
                            @php($i++)
                            <tr >
                              <td >{{$i}}</th>
                              <td id="txtnombre{{$cli->id}}">{{$cli->nombre}}</td>
                              <td id="txtCantidadSistema{{$cli->id}}">{{$cli->cantidad}}</td>
                              
                              <td id="txtprecio{{$cli->id}}">{{$cli->precioVenta}}</td>
                              
                             
                              <td>
                                @if($cli->foto)
                                <img src="{{Storage::url('public/images/productos/'.$cli->foto)}}" alt="" width="60px;">
                                @endif
                              </td>
                              <td>
                                <input type="text" value="" class="form-control form-control-sm" id="txtcantidad{{$cli->id}}" >
                              </td>

                                <td>
                                    <button class="btn btn-success btn-sm" type="button" data-cantidad="{{$cli->cantidad}}" data-id="{{$cli->id}}" onclick="cargarProducto(this);">Vender</button>
                                </td>
                            </tr>
      
                            @endforeach
                           
                          </tbody>
                        </table>
                            

                        </div>
                        <div class="col-6">
                          <form action="{{route('finalizarFactura')}}" method="post" id="procesarVenta">
                              @csrf
                            <div class="form-group row">
                                

                                <div class="col-md-6">
                                  <label for="cliente" class="col-md-12 col-form-label">Selecion Cliente</label>
                                  <select name="cliente" id="cliente" class="form-control" required="">
                                    <option value=""></option>
                                    @foreach($clientes as $clie)
                                    <option value="{{$clie->id}}">{{$clie->nombre}} - {{$clie->cedula}}</option>
                                    @endforeach
                                  </select>
                                </div>

                                <div class="col-md-6">
                                  <label for="numeroFactura" class="col-md-12 col-form-label">Número de factura</label>
                                  <input type="text" class="form-control form-control-sm" name="numeroFactura" id="numeroFactura" placeholder="Ingrese #" required="">
                                </div>
                              </div>

                            <!-- detalle factura -->
                            <div class="table-responsive">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Precio U.</th>
                                    <th scope="col">Total</th>
                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody id="detalleFactura">
                                  
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <td colspan="5">Total</td>
                                    <td><b id="totalVenta">$ 00</b></td>
                                  </tr>
                                </tfoot>
                              </table>
                              </div>
                            <!-- fin detalle factura -->
                            <div id="acciones">
                              <a href="{{route('facturas')}}" class="btn btn-danger btn-lg pull-right">Cancelar venta</a>
                              <button class="btn btn-info btn-lg pull-right" type="submit">Finalizar venta</button>
                            </div>
                            

                          </form>
                        </div>
                      </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
  $('#m_mensual').addClass('active');
  $('#m_factura').addClass('active');
  
  $('#cliente').select2();
total=0;

$('#procesarVenta').validate({
  messages:{
    numeroFactura:{
      required:'Ingrese # de factura'
    },
    cliente:{
      required:'Selecione cliente'
    }
  },
  errorElement: "em",
  submitHandler:function(form){
    

    alertify.confirm("ESTA SEGURO DE FINALIZAR LA VENTA.","TOTAL VENTA: $ "+total.toFixed(2)+"<br>"+"CLIENTE: "+$('#cliente :selected').text(),
    function(){
      form.submit();
    },
    function(){
      alertify.error('Cancelado');
    });

  }
});

$('#procesarVenta').on('keyup keypress', function(e) {
  var keyCode = e.keyCode || e.which;
  if (keyCode === 13) { 
    e.preventDefault();
    return false;
  }
});

$('#cliente').on('select2:select', function (e) {
    var idCliente = e.params.data.id;
    $(this).valid(); 
    // para info de cliente $.get
  });



function cargarProducto(argument) {
  var id=$(argument).data('id');

  cantidadSistema=parseInt($('#txtCantidadSistema'+id).text());
  cantidad=$('#txtcantidad'+id).val();

  if (cantidad>0 && cantidad<=cantidadSistema) {
    
    if ($('#fila'+id).length) {
      alert('Ya existe');
    }else{
      var nombre=$('#txtnombre'+id).text();
      precio =parseFloat($('#txtprecio'+id).text());

      var fila='<tr id="fila'+id+'">'+
        '<th class="contadorAux"></th>'+
        '<td> <input type="hidden" name="idproductosventa[]" value="'+id+'" required />'+nombre+'</td>'+
        '<td> <input type="hidden" name="cantidadesventa[]" value="'+cantidad+'" required />'+cantidad+'</td>'+
        '<td>'+precio.toFixed(2)+'</td>'+
        '<td class="subtotal">'+(cantidad*precio).toFixed(2)+'</td>'+
        '<td><button class="btn btn-xs btn-danger" type="button" data-id="'+id+'" onclick="quitarProducto(this);">x</button></td>'+
      '</tr>';

      $('#detalleFactura').append(fila);  

      crearContador();
    }
    

  }else {
    alert('Cantidad a vender incorrecto');
  }
}

function crearContador(){
  total=0;
  $('#detalleFactura .contadorAux').each(function(index, el) {
        $(this).html(index+1);
  });
  $('#detalleFactura .subtotal').each(function(index, el) {

        total+=parseFloat($(this).html());
  });

  $('#totalVenta').html(total.toFixed(2));

  if (total>0) {
    $('#acciones').show();
  }else{
    $('#acciones').hide();
  }
  
}

function quitarProducto(argument){
  $('#fila'+$(argument).data('id')).remove();
  crearContador();
}
crearContador();
</script>
@endsection
