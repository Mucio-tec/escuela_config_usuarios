@extends('principal')
@section('contenido')
<div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                <div class="col-md-12">
                        <h3 class="text-center title-2">Reporte Tutores</h3>
                    <div class="user-data__footer"><a href="{{ route('altatutores') }}">
                         <button  class=" btn btn-success">Alta Tutores</button></a>
                         <a href="{{ route('reportetutor') }}">
                         <button  class=" btn btn-success" align="rigth">Actualizar Reporte</button></a>
                         <a href="{{ route('tutores') }}">
                         <button class="btn btn-primary btn-sm">Informe PDF Tutores</button></a>
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
    @foreach($tutores as $t)
    <tr>
    <td>{{ $t->idtut }}</td>
    <td>{{  $t->nombre}}</td>
    <td>{{  $t->ap_emp}}</td>
    <td>{{$t->am_emp}}</td>
    <td>{{$t->edad}}</td>
    <td>{{ $t->sexo }}</td>
    <td>{{ $t->telefono }}</td>
    <td>{{ $t->correo }}</td>
    <td>{{  $t->calle}}</td>
    <td>{{  $t->num_calle}}</td>
    <td>{{ $t->colonia}}</td>
    <td>{{ $t->cp }}</td>
    <td>{{ $t->municipios->municipio}}</td>
    <td>
            @if($t->activo == 'si')
            <p>Campo Activo</p>
            @else
            <p>No esta activo</p>
            @endif
        </td>
   <td> 
        @if($t->activo == 'si')
           
        <a class="btn btn-warning btn-sm" id="btn3" href="{{ route('borratutor',$t->idtut) }}">
            Inhabilita 
            <a class="btn btn-primary btn-sm" id="btn3"  href="{{ route('editt',$t->idtut) }}">
                Editar 
        @else
            <a  class="btn btn-success btn-sm"  href="{{ route('activartutor',$t->idtut) }}">
                Habilitar
                <a class="btn btn-primary btn-sm" id="btn3"  href="{{ route('editt',$t->idtut) }}">
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