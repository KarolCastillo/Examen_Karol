@extends('layouts.app')
@section('content')
<div class="container mt-6">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-4">
            <!--MENSAJE FLASH-->
            @if(session('empleadoguardado'))
                <div class="alert alert-success">
                   {{ session('empleadoguardado') }}
                </div>
            @endif

            <!--VALIDACION DE ERRORES-->
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li> {{$error}} </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card bg-light border-primary ">
                <form action="{{route('save')}}" mathod="POST">
                    @csrf
                    <div class="card-header text-center text-white bg-primary"><i class="fas fa-user-plus"></i> REGISTRAR NUEVO EMPLEADO</div>
                        <div class="card-body">
                            <div class="row g-3">
                                <div class=" col mb-3 ">
                                    <label for="">Codigo</label>
                                    <input type="text" class="form-control border border-primary" name="codigo_empleado" placeholder="01">
                                    <input type="hidden" name="control" value="form">
                                </div>

                                <div class=" col mb-3 ">
                                    <label for="">Nombre</label>
                                    <input type="text" class="form-control border border-primary" name="nombre_empleado" placeholder="Juan">
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class=" col mb-3 ">
                                    <label for="">Numero</label>
                                    <input type="text" class="form-control border border-primary" name="numero_telefono" placeholder="00000000">
                                </div>

                                 <div class="form-group col-md-6 ">
                                    <label for="">Departamento</label>
                                    <input type="text" class="form-control border border-primary" name="departamento" placeholder="Izabal">
                                 </div>
                            </div>


                            <div class=" form-group col-md-12 ">
                                <label for="">Correo</label>
                                <input type="text" class="form-control border border-primary " name="correo" placeholder="Ejemplo@gmail.com">
                            </div>


                            <div class="form-group col-md-12">
                                <label for="">Dirección</label>
                                <input type="text" class="form-control border border-primary" name="direccion"  placeholder="La cocona">
                            </div>


                            <div class="row form-group justify-content-center">
                                <button type="submit" class="btn btn-success col-md-3 mt-3 mr-2 offset">Guardar  <i class="fas fa-save"></i></button>

                                <a type="button " href="{{ url('/LISTADO')}}" class="btn btn-danger col-md-3 mt-3 mr-2 offset float-right">Cancelar <i class="fas fa-ban"></i> </a>
                            </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
@endsection

