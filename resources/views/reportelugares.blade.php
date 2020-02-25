@extends('principal')
@section('contenido')
<div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                <div class="col-md-12">
                        <h3 class="text-center title-2">Reporte Lugares</h3>
                    <div class="user-data__footer"><a href="{{ route('altalugar') }}">
                         <button  class=" btn btn-success">Alta Lugares</button></a>
                         <a href="{{ route('reportelugares') }}">
                                <button  class=" btn btn-success" align="rigth">Actualizar Reporte</button></a>
                                <a href="{{ route('lugares') }}">
                         <button class="btn btn-primary btn-sm">Informacion de lugares</button></a>
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
            <th>Lugar</th>
            <th>Calle</th>
            <th>Colonia</th>
            <th>num_exterior</th>
            <th>Municipio</th>
            <th>Opciones</th>
    
        </tr>
    </thead>
    <tbody>
    @foreach($lugares as $l)
    <tr>
    <td>{{ $l->idlu }}</td>
    <td>{{  $l->lugar}}</td>
    <td>{{$l->calle}}</td>
    <td>{{$l->colonia}}</td>
    <td>{{$l->num_exterior}}</td>
    <td>{{ $l->municipios->municipio }}</td>
    <td>
        @if($l->activo == 'si')
        <p>Campo Activo</p>
        @else
        <p>No esta activo</p>
        @endif
    </td>
   <td>       
    @if($l->activo == 'si')
           
    <a class="btn btn-warning btn-sm" id="btn3" href="{{ route('borralugar',$l->idlu) }}">
        Inhabilita 
        <a class="btn btn-primary btn-sm" id="btn3"  href="{{ route('edit',$l->idlu) }}">
            Editar 
    @else
        <a  class="btn btn-success btn-sm"  href="{{ route('activarlugar',$l->idlu) }}">
            Habilitar
            <a class="btn btn-primary btn-sm" id="btn3"  href="{{ route('edit',$l->idlu) }}">
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