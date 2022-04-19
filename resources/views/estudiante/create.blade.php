@extends('layout.plantilla')
@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Ingresar Estudiante</h3>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li> 
                @endforeach
            </ul>
        </div>
        @endif
    </div>
</div> {!!Form::open(array('url'=>'estudiante','method'=>'POST','autocomplete'=>'off'))!!}
{{Form::token()}}
<div class="row">
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="nombre_est">Nombre Estudiante</label>
            <input type="text" name="nombre_est" id="nombre_est" class="form-control"
                placeholder="Nombre Completo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="numero_identificacion">Numero Identificacion</label>
            <input type="num" name="numero_identificacion" id="numero_identificacion" class="form-control" 
            placeholder="Digite el número Documento">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="edad">Edad</label>
            <input type="text" name="edad" id="edad" class="form-control" 
            placeholder="Digite la edad">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="nombre_padre">Nombre Padre</label>
            <input type="text" name="nombre_padre" id="nombre_padre" class="form-control" 
            placeholder="Nombre del Padre">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="nombre_madre">Nombre Madre</label>
            <input type="text" name="nombre_madre" id="nombre_madre" class="form-control" 
            placeholder="Nombre de la Madre">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="nombre_acudiente">Nombre Acudiente</label>
            <input type="text" name="nombre_acudiente" id="nombre_acudiente" class="form-control" 
            placeholder="Nombre del Acudiente">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="telefono_contacto">Telefono Contacto</label>
            <input type="num" name="telefono_contacto" id="telefono_contacto" class="form-control" 
            placeholder="Telefono Contacto">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="telefono_acudiente">Telefono Acudiente</label>
            <input type="num" name="telefono_acudiente" id="telefono_acudiente" class="form-control" 
            placeholder="Telefono Acudiente">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="grado_cursa">Grado Cursa</label>
            <input type="text" name="grado_cursa" id="grado_cursa" class="form-control" 
            placeholder="Grado que Cursa">
        </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <button class="btn btn-primary" type="submit">
                <span class="glyphicon glyphicon-ok"></span> Guardar</button>
            <button class="btn btn-danger" type="reset">
                <span class="glyphicon glyphicon-remove"></span> Vaciar
                Campos</button>
            <a class="btn btn-info" type="reset" href="{{url('persona')}}"><span
                    class="glyphicon glyphicon-home"></span> Regresar </a>
        </div>
    </div>
</div>
{!!Form::close()!!}
@endsection