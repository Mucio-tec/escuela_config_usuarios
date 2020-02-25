@extends('principal')
@section('contenido')
<div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                <div class="col-md-12">
                        <h3 class="text-center title-2">Reporte Horarios</h3>
                    <div class="user-data__footer"><a href="{{ route('altahorario') }}">
                         <button  class=" btn btn-success">Alta Horarios</button></a>
                         <a href="{{ route('reportehorario') }}">
                                <button  class=" btn btn-success" align="rigth">Actualizar reporte</button></a>
                                <a href="{{ route('horarios') }}">
                         <button class="btn btn-primary btn-sm">Informe de Horarios</button></a>
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
            <th>Horario</th>
            <th>Horas</th>
            <th>Opciones</th>
    
        </tr>
    </thead>
    <tbody>
    @foreach($horarios as $h)
    <tr>
    <td>{{ $h->idh }}</td>
    <td>{{  $h->horario}}</td>
    <td>{{  $h->horas}}</td>
    <td>
        @if($h->activo == 'si')
        <p>Campo Activo</p>
        @else
        <p>No esta activo</p>
        @endif
    </td>
   <td>       
    @if($h->activo == 'si')
           
    <a class="btn btn-warning btn-sm" id="btn3" href="{{ route('borrahorario',$h->idh) }}">
        Inhabilita 
        <a class="btn btn-primary btn-sm" id="btn3"  href="{{ route('edith',$h->idh) }}">
            Editar 
    @else
        <a  class="btn btn-success btn-sm"  href="{{ route('activarhorario',$h->idh) }}">
            Habilitar
            <a class="btn btn-primary btn-sm" id="btn3"  href="{{ route('edith',$h->idh) }}">
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