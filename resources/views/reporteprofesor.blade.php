@extends('principal')
@section('contenido')
<div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                <div class="col-md-12">
                        <h3 class="text-center title-2">Reporte Profesores</h3>
                    <div class="user-data__footer"><a href="{{ route('altaalumno') }}">
                         <button  class=" btn btn-success">Alta Profesores</button></a>
                         <a href="{{ route('reporteprofesor') }}">
                         <button  class=" btn btn-success" align="rigth">Actualizar Reporte </button></a>         
                                    
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
    @foreach($profesores as $p)
    <tr>
    <td>{{ $p->idprof }}</td>
    <td>{{  $p->nombre}}</td>
    <td>{{$p->ap_emp}}</td>
    <td>{{$p->am_emp}}</td>
    <td>{{$p->edad}}</td>
    <td>{{ $p->sexo }}</td>
    <td>{{ $p->telefono }}</td>
    <td>{{ $p->correo }}</td>
    <td>{{ $p->calle}}</td>
    <td>{{ $p->num_calle}}</td>
    <td>{{ $p->colonia}}</td>
    <td>{{ $p->cp }}</td>
    <td>{{ $p->municipios->municipio }}</td>
    <td>
            @if($p->activo == 'si')
            <p>Campo Activo</p>
            @else
            <p>No esta activo</p>
            @endif
        </td>
   <td> 
      
        @if($p->activo == 'si')
           
        <a class="btn btn-warning btn-sm" id="btn3" href="{{ route('borraprofesor',$p->idprof) }}">
            Inhabilita 
            <a class="btn btn-primary btn-sm" id="btn3"  href="{{ route('editp',$p->idprof) }}">
                Editar 
        @else
            <a  class="btn btn-success btn-sm"  href="{{ route('activarprofesor',$p->idprof) }}">
                Habilitar
                <a class="btn btn-primary btn-sm" id="btn3"  href="{{ route('editp',$p->idprof) }}">
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