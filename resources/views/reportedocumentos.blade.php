@extends('principal')
@section('contenido')
<div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                <div class="col-md-12">
                        <h3 class="text-center title-2">Reporte de Información</h3>
                    <div class="user-data__footer"><a href="{{ route('altadocumento') }}">
                         <button  class=" btn btn-success">Alta Documentos</button></a>
                         <a href="{{ route('reportedocumentos') }}">
                                <button  class=" btn btn-success" align="rigth">Actualizar Documentos </button></a>
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
            <th>Nombre del Documento</th>
            <th>Ruta</th>
            <th>Fecha</th>
            <th>Opciones</th>            
    
        </tr>
    </thead>
    <tbody>
    @foreach($documentos as $d)
    <tr>
    <td>{{$d->idd}}</td>
    <td>{{$d->documento}}</td>
    <td>{{$d->ruta}}</td>
    <td>{{$d->fecha}}</td>
    <td>       
            <a class="btn btn-primary" id="btn"  href="{{ route('eliminadocumento',$d->idd) }}">
                    Eliminar
                          
        </a>
    </td>
    </td>
    </tr>
    </tbody>
    @endforeach
</table>
</div>
@stop