<html>
<body>
<style>
table { border-collapse: collapse; /* Los bordes de la tabla aparecen juntos */ } 
td,th { border: 1px solid black; } 
</style>

<div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                        <table class="table table-borderless table-striped table-earning">
                        <caption><h4><font face="Arial" size="3">Reporte General de Tutores</font></h4></caption> 
    <thead>
                            <tr>
            <th><center><font face="Arial" size="1">Clave</font></center></th>
            <th><center><font face="Arial" size="1">Nombre</font></center></th>
            <th><center><font face="Arial" size="1">Edad</font></center></th>
            <th><center><font face="Arial" size="1">Telefono</font></center></th>
            <th><center><font face="Arial" size="1">Correo</font></center></th>
            <th><center><font face="Arial" size="1">Calle</font></center></th>
            <th><center><font face="Arial" size="1">Num-Casa</font></center></th>
            <th><center><font face="Arial" size="1">Colonia</font></center></th> 
            <th><center><font face="Arial" size="1">Código postal</font></center></th>
            <th><center><font face="Arial" size="1">Municipio</font></center></th>
    
        </tr>
    </thead>
    <tbody>
    @foreach($tutores as $t)
    <tr>
    <td><font face="Arial" size="1">{{ $t->idtut }}</font></td>
    <td><font face="Arial" size="1">{{  $t->nombre}} {{  $t->ap_emp}} {{$t->am_emp}} </font></td>
    <td><font face="Arial" size="1">{{$t->edad}}</font></td>
    <td><font face="Arial" size="1">{{ $t->telefono }}</font></td>
    <td><font face="Arial" size="1">{{ $t->correo }}</font></td>
    <td><font face="Arial" size="1">{{  $t->calle}}</font></td>
    <td><font face="Arial" size="1">{{  $t->num_calle}}</font></td>
    <td><font face="Arial" size="1">{{ $t->colonia}}</font></td>
    <td><font face="Arial" size="1">{{ $t->cp }}</font></td>
    <td><font face="Arial" size="1">{{ $t->municipios->municipio}}</font></td>
    @endforeach
    </table>
   </body> 
</html>