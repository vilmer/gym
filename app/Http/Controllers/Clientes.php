<?php

namespace gym\Http\Controllers;

use Illuminate\Http\Request;
use gym\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Auth;
class Clientes extends Controller
{
   	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->perfil=="Administrador") {
            $clientes=User::where('perfil','Cliente')->get();
            $data=array('clientes'=>$clientes);
            return view('clientes.index',$data);
        }
        return view('error');
    	
    }


    public function nuevo()
    {
        if (Auth::user()->perfil=="Administrador") {
            return view('clientes.nuevo');
        }
        return view('error');
    }

    public function guardar(Request $request)
    {

        if (Auth::user()->perfil=="Administrador") {
        	$request->validate([
                'email'=>'required|string|email|max:255|unique:users',
                'nombre' => 'required',
                'apellido'=>'required',
                'cedula'=>'required|max:255|unique:users',
                'telefono'=>'nullable',
                'direccion'=>'nullable',
            ]);

        	$user=new User;
    		$user->name = 'name';
            $user->email = $request->input('email');
            $user->password = Hash::make('123456');
            $user->nombre = $request->input('nombre');
            $user->apellido=$request->input('apellido');
            $user->cedula=$request->input('cedula');
            $user->telefono=$request->input('telefono');
            $user->direccion=$request->input('direccion');
            $user->perfil='Cliente';

            $user->save();
            Session::flash('success', $user->nombre.' '.$user->apellido.' ingresado exitoso.!');
            return redirect()->route('clientes');

        }
        return view('error');

    }


    public function editar($idCli)
    {
        if (Auth::user()->perfil=="Administrador") {
            
            return view('clientes.editar',['cliente'=>User::find($idCli)]);
        }
        return view('error');
    }

    public function actualizar(Request $request)
    {
        if (Auth::user()->perfil=="Administrador") {
            $request->validate([
                'id'=>'required',
                'email'=>'required|string|email|max:255|unique:users,email,'.$request->input('id'),
                'nombre' => 'required',
                'apellido'=>'required',
                'cedula'=>'required|max:255|unique:users,cedula,'.$request->input('id'),
                'telefono'=>'nullable',
                'direccion'=>'nullable',
            ]);

            $user=User::find($request->input('id'));
            // $user->name = 'name';
            $user->email = $request->input('email');
            // $user->password = Hash::make('123456');
            $user->nombre = $request->input('nombre');
            $user->apellido=$request->input('apellido');
            $user->cedula=$request->input('cedula');
            $user->telefono=$request->input('telefono');
            $user->direccion=$request->input('direccion');
            // $user->perfil='Cliente';

            $user->save();
            Session::flash('success', $user->nombre.' '.$user->apellido.' actualizado exitoso.!');
            return redirect()->route('clientes');
            
        }
        return view('error');
    }

    public function eliminar($idCl)
    {
        if (Auth::user()->perfil=="Administrador") {
            User::destroy($idCl);
            Session::flash('error', 'Cliente eliminado exitoso.!');
            return redirect()->route('clientes');
        }
        return view('error');
    }
}
