@extends('layout.plantilla')

@section('contenido') <div class="row">
    <div class="col-md-9"> 
      <a href="{{url('estudiante/create')}}" class="pull-right">
            <button class="btn btn-success">Crear Estudiante</button> </a> 
        </div>
</div>
<div class="row">
    <div class="col-md-9 col-xs-9">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <th>Id</th>
                    <th>Nombre Estudiante</th>
                    <th>Numero Identificacion</th>
                    <th >Edad</th>
                    <th>Nombre Padre</th> 
                    <th>Nombre Madre</th> 
                    <th>Nombre Acudiente</th>
                    <th >Telefono Contacto</th> 
                    <th >Telefono Acudiente</th> 
                    <th >Grado Cursa</th> 
                </thead>
                <tbody> 
                    @foreach($estudiante as $per) 
                    <tr>
                        <td>{{ $per->id }}</td>
                        <td></td>
                        <td>{{ $per->nombre_est }}</td>
                        <td>{{ $per->numero_identificacion}}</td>
                        <td>{{ $per->edad }}</td>
                        <td>{{ $per->nombre_padre }}</td>
                        <td>{{ $per->nombre_madre }}</td>
                        <td>{{ $per->nombre_acudiente}}</td>
                        <td>{{ $per->telefono_contacto }}</td>
                        <td>{{ $per->telefono_acudiente }}</td>
                        <td>{{ $per->grado_cursa }}</td>
                        <td> 
                            <a href=""><button class="btn btn-primary">Actualizar</button></a> 
                            <a href="" data-target="" data-toggle="modal"> 
                                <button class="btn btn-danger">Eliminar</button></a> 
                            </td>
                    </tr> 
                @endforeach 
            </tbody>
            </table>
        </div>
    </div>
</div> 
@endsection