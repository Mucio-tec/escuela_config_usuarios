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
                        <!--<h3 class="text-center title-2">Reporte Alumnos</h3>-->
                        
                        <table class="table" aling="center">
                        <caption><h4><font face="Arial" size="4">Reporte General de Inscripciones de Alumnos</font></h4></caption> 
    <thead>
                            <tr>
            <th><font face="Arial" size="1">Clave</font></th>
            <th><font face="Arial" size="1">Nombre</font></th>
            <th><font face="Arial" size="1">Telefono</font></th>
            <th><font face="Arial" size="1">Correo</font></th>
        </tr>
    </thead>
    <tbody>
    @foreach($alumnos as $a)
    <tr>
    <td><font face="Arial" size="1">{{ $a->idalum }}</font></td>
    <td><font face="Arial" size="1">{{  $a->nombre}} {{$a->ap_emp}} {{$a->am_emp}}</font></td>
    <td><font face="Arial" size="1">{{ $a->telefono }}</font></td>
    <td><font face="Arial" size="1">{{ $a->correo }}</font></td>
    @endforeach
    </thead>
    </table>
   </body> 
</html>
