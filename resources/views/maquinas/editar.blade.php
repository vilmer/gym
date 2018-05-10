@extends('layouts.app')

@section('content')
<div class="sec-spacer">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Administracion de maquinas
                        <a href="{{route('maquinas')}}">atras</a>
                    </div>

                    <div class="card-body">
                       <form method="POST" action="{{ route('actualizarMaquina') }}" enctype="multipart/form-data">
                            @csrf

                            <input type="hidden" name="id" value="{{$maquina->id}}">
                            <!-- nombres -->
                            <div class="form-group row">
                                <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>

                                <div class="col-md-6">
                                    <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ $maquina->nombre }}" required >

                                    @if ($errors->has('nombre'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('nombre') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <!-- cantidad -->
                            <div class="form-group row">
                                <label for="cantidad" class="col-md-4 col-form-label text-md-right">Cantidad</label>

                                <div class="col-md-6">
                                    <input id="cantidad" type="number" class="form-control{{ $errors->has('apecantidadllido') ? ' is-invalid' : '' }}" name="cantidad" value="{{ $maquina->cantidad }}" required >

                                    @if ($errors->has('cantidad'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('cantidad') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <!-- marca -->
                            <div class="form-group row">
                                <label for="marca" class="col-md-4 col-form-label text-md-right">Marca</label>

                                <div class="col-md-6">
                                    <input id="marca" type="text" class="form-control{{ $errors->has('marca') ? ' is-invalid' : '' }}" name="marca" value="{{ $maquina->marca }}" required >

                                    @if ($errors->has('marca'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('marca') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <!-- estado -->
                            <div class="form-group row">
                                <label for="foto" class="col-md-4 col-form-label text-md-right">Foto</label>

                                <div class="col-md-6">
                                    @if($maquina->foto)
                                        <img src="{{Storage::url('public/images/maquinas/'.$maquina->foto)}}" alt="" width="120px;">
                                    @else
                                    @endif
                                    <input id="foto" type="file" class="form-control{{ $errors->has('foto') ? ' is-invalid' : '' }}" name="foto" value="{{ old('foto') }}" >

                                    @if ($errors->has('foto'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('foto') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <!-- direccion -->

                            <div class="form-group row">
                                <label for="observacion" class="col-md-4 col-form-label text-md-right">Observación</label>

                                <div class="col-md-6">
                                    

                                    <textarea id="observacion" type="text" class="form-control{{ $errors->has('observacion') ? ' is-invalid' : '' }}" name="observacion" >{{ $maquina->observacion}}</textarea>

                                    @if ($errors->has('observacion'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('observacion') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <!-- estado -->
                            <div class="form-group row">
                                <label for="estado" class="col-md-4 col-form-label text-md-right">Estado</label>

                                <div class="col-md-6">
                                    
                                    <select name="estado" id="estado" class="form-control{{ $errors->has('estado') ? ' is-invalid' : '' }}">
                                        <option value="1" {{ $maquina->estado==true ? 'selected' : ''}} >Activo</option>
                                        <option value="0" {{$maquina->estado==false ? 'selected' : ''}} > Inactivo</option>
                                    </select>

                                    

                                    @if ($errors->has('estado'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('estado') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Actualizar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
 $('#m_registro').addClass('active');
  $('#m_maquina').addClass('active');
</script>
@endsection
