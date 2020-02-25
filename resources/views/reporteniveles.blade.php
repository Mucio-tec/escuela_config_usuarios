@extends('principal')
@section('contenido')
<div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                <div class="col-md-12">
                        <h3 class="text-center title-2">Reporte Niveles</h3>
                    <div class="user-data__footer"><a href="{{ route('altanivel') }}">
                         <button  class=" btn btn-success">Alta Niveles</button></a>
                         <a href="{{ route('reporteniveles') }}">
                                <button  class=" btn btn-success" align="rigth">Actualizar Niveles </button></a>
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
            <th>Nivel</th>
            <th>Status</th>
            <th>Opciones</th>
            
    
        </tr>
    </thead>
    <tbody>
    @foreach($niveles as $n)
    <tr>
    <td>{{ $n->id_niv }}</td>
    <td>{{  $n->Nivel}}</td>
    <td>
        @if($n->activo == 'si')
        <p>Campo Activo</p>
        @else
        <p>No esta activo</p>
        @endif
    </td>
   <td>       
    @if($n->activo == 'si')
           
    <a class="btn btn-warning btn-sm" id="btn3" href="{{ route('borranivel',$n->id_niv) }}">
        Inhabilita 
        <a class="btn btn-primary btn-sm" id="btn3"  href="{{ route('editn',$n->id_niv) }}">
            Editar 
    @else
        <a  class="btn btn-success btn-sm"  href="{{ route('activarnivel',$n->id_niv) }}">
            Habilitar
            <a class="btn btn-primary btn-sm" id="btn3"  href="{{ route('editn',$n->id_niv) }}">
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