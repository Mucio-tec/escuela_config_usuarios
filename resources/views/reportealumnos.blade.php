@extends('principal')
@section('contenido')
<div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                <div class="col-md-12">
                        <h3 class="text-center title-2">Reporte Alumnos</h3>
                    <div class="user-data__footer"><a href="{{ route('altaalumno') }}">
                         <button  class=" btn btn-success">Alta Alumnos</button>
                         <a href="{{ route('reportealumnos') }}">
                         <button  class=" btn btn-success">Actualizar Reporte </button></a>
                         <a href="{{ route('alumnos') }}">
                         <button class="btn btn-primary btn-sm">Informacion Global de alumnos</button></a>
                    </div>
                    <!-- DATA TABLE-->
                    <div class="table-responsive table--no-card m-b-40">
                    @if (Session::has('exito'))
                
                    <div class="alert alert-success alert-dismissable data-dismiss=alert">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong> {{ Session::get('exito') }}.</strong>
                    </div>
                        @endif
                        <table class="table table-borderless table-striped table-earning">
    <thead>
                            <tr>
            <th>Clave</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Edad</th>
            <th>sexo</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Calle</th>
            <th>Num de Casa</th>
            <th>Colonia</th> 
            <th>Código postal</th>
            <th>Municipio</th>
            <th>Opciones</th>
    
        </tr>
    </thead>
    <tbody>
    @foreach($alumnos as $a)
    <tr>
    <td>{{ $a->idalum }}</td>
    <td>{{  $a->nombre}}</td>
    <td>{{$a->ap_emp}}</td>
    <td>{{$a->am_emp}}</td>
    <td>{{$a->edad}}</td>
    <td>{{ $a->sexo }}</td>
    <td>{{ $a->telefono }}</td>
    <td>{{ $a->correo }}</td>
    <td>{{  $a->calle}}</td>
    <td>{{  $a->num_calle}}</td>
    <td>{{ $a->colonia}}</td>
    <td>{{ $a->cp }}</td>
    <td>{{ $a->municipios->municipio }}</td>
    
    
        <td>
        @if($a->activo == 'si')
        <p>Campo Activo</p>
        @else
        <p>No esta activo</p>
        @endif
    </td>
       <td>
            @if($a->activo == 'si')
           
            <a class="btn btn-warning btn-sm" id="btn3" href="{{ route('borraalumno',$a->idalum) }}">
                Inhabilita 
        <a class="btn btn-primary btn-sm" id="btn3"  href="{{ route('edita',$a->idalum) }}">
        Modificar
            @else
                <a  class="btn btn-success btn-sm"  href="{{ route('restauraralumno',$a->idalum) }}">
                    Habilitar
                    <a class="btn btn-primary btn-sm" id="btn3"  href="{{ route('edita',$a->idalum) }}">
                            Editar
            </a>
            @endif
            
    </td>
    </tr>
    </tbody>
    @endforeach
</table>
</div>
    @stop