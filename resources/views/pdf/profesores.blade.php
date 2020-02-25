<html>
<body>
<style>
table { border-collapse: collapse; /* Los bordes de la tabla aparecen juntos */ } 
td,th { border: 1px solid black; } 
</style>
<div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                <div class="col-md-12">
                        <table class="table table-borderless table-striped table-earning">
                        <caption><h4><font face="Arial" size="3">Reporte Profesores</font></h4></caption> 
    <thead>
                            <tr>
            <th><center><font face="Arial" size="1">Clave</font></center></th>
            <th><center><font face="Arial" size="1">Nombre</font></center></th>
            <th><center><font face="Arial" size="1">Edad</font></center></th>
            <th><center><font face="Arial" size="1">sexo</font></center></th>
            <th><center><font face="Arial" size="1">Telefono</font></center></th>
            <th><center><font face="Arial" size="1">Correo</font></center></th>
            <th><center><font face="Arial" size="1">Calle</font></center></th>
            <th><center><font face="Arial" size="1">Num de Casa</font></center></th>
            <th><center><font face="Arial" size="1">Colonia</font></center></th> 
            <th><center><font face="Arial" size="1">Código postal</font></center></th>
            <th><center><font face="Arial" size="1">Municipio</font></center></th>
          
    
        </tr>
    </thead>
    <tbody>
    @foreach($profesores as $p)
    <tr>
    <td><font face="Arial" size="1">{{ $p->idprof }}</font></td>
    <td><font face="Arial" size="1">{{  $p->nombre}} {{$p->ap_emp}} {{$p->am_emp}} </font></td>
    <td><font face="Arial" size="1">{{$p->edad}}</font></td>
    <td><font face="Arial" size="1">{{ $p->sexo }}</font></td>
    <td><font face="Arial" size="1">{{ $p->telefono }}</font></td>
    <td><font face="Arial" size="1">{{ $p->correo }}</font></td>
    <td><font face="Arial" size="1">{{ $p->calle}}</font></td>
    <td><font face="Arial" size="1">{{ $p->num_calle}}</font></td>
    <td><font face="Arial" size="1">{{ $p->colonia}}</font></td>
    <td><font face="Arial" size="1">{{ $p->cp }}</font></td>
    <td><font face="Arial" size="1">{{ $p->municipios->municipio }}</font></td>
    </tr>
    </tbody>
    @endforeach
    </body>
    </html>