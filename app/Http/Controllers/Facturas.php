<?php

namespace gym\Http\Controllers;

use Illuminate\Http\Request;
use gym\Factura;
use gym\DetalleFactura;
use Illuminate\Support\Facades\Session;
use Auth;
use gym\User;
use gym\Producto;


class Facturas extends Controller
{

        // factura
        // estado
        // total
        // user_id


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->perfil=="Administrador") {

            $data=array('facturas'=>Factura::get());
            return view('facturas.index',$data);
        }
        return view('error');
    	
    }

    public function nuevo()
    {
        if (Auth::user()->perfil=="Administrador") {
            
            $data=array(
                'productos'=>Producto::all(),
                'clientes'=>User::all()
            );

            return view('facturas.nuevo',$data);
        }
        return view('error');
        
    }

    public function finalizar(Request $request)
    {
        if (Auth::user()->perfil=="Administrador") {
            
            $idsProductos=$request->input('idproductosventa');
            $cantidadesProductos=$request->input('cantidadesventa');

            $venta=new Factura;
            $venta->factura=$request->input('numeroFactura');
            $venta->user_id=$request->input('cliente');
            $venta->save();
            
            $i=0;
            $venta->total=0;
            foreach ($idsProductos as $pro) {

                $producto=Producto::find($pro);
                $detalleFactura=new DetalleFactura;
                $detalleFactura->cantidad=$cantidadesProductos[$i];
                $detalleFactura->precio=$producto->precioVenta;
                $detalleFactura->factura_id=$venta->id;
                $detalleFactura->producto_id=$pro;
                $detalleFactura->save();

                $producto->cantidad=$producto->cantidad-$cantidadesProductos[$i];
                $producto->save();

                $venta->total=$venta->total+($producto->precioVenta*$cantidadesProductos[$i]);
                $venta->save();
                $i++;

            }

            $data=array('mensajeVentaOk'=>'Nueva venta realizada exitosa','idVenta'=>$venta->id);
            Session::flash('ventaok', $data);
            return redirect()->route('nuevoFactura');
        }
        return view('error');
    }

    public function imprimir($id)
    {
        return $id;
    }
}
