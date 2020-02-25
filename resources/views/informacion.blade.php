<!DOCTYPE html>
@extends('usuarios')
@section('contenido')
<div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                <div class="col-md-12">
                        <h3 class="text-center title-2"></h3>
                       <a href="{{ route('informacion') }}">
                                <button  class=" btn btn-success" align="rigth">Actualizar</button></a>
                    </div>
                    <!-- DATA TABLE-->
                        <table class="table table-borderless table-striped table-earning">
    <thead>
                            <tr>
          
            <th>Archivo</th>
            <th>Fecha</th>
            <th>Opciones</th>            
    
        </tr>
    </thead>
    <tbody>
    @foreach($documentos as $d)
    <tr>
   
    <td>{{$d->documento}}</td>
    <td>{{$d->fecha}}</td>
    <td>       
        <a  class="btn btn-info"  href="{{ route('download',$d->documento) }}" src="">
            Descargar
            <!--<a class="btn btn-primary" id="btn"  href="{{ route('eliminadocumento',$d->idd) }}">
                    Eliminar-->
                          
        </a>
    </td>
    </td>
    </tr>
    </tbody>
    @endforeach
</table>
</div>
@stop