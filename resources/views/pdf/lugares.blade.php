<html>
<body>
<style>
table { border-collapse: collapse; /* Los bordes de la tabla aparecen juntos */ } 
td,th { border: 1px solid black; } 
</style>
<div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                    <!-- DATA TABLE-->
                    
                        <table class="table table-borderless table-striped table-earning">
                        <caption><h4><font face="Arial" size="3">Reporte General de Horarios</font></h4></caption> 
    <thead>
                            <tr>
            <th><center><font face="Arial" size="1">Clave</font></center></th>
            <th><center><font face="Arial" size="1">Lugar</font></center></th>
            <th><center><font face="Arial" size="1">Calle</font></center></th>
            <th><center><font face="Arial" size="1">Colonia</font></center></th>
            <th><center><font face="Arial" size="1">num_ext</font></center></th>
            <th><center><font face="Arial" size="1">Municipio</font></center></th>
    
        </tr>
    </thead>
    <tbody>
    @foreach($lugares as $l)
    <tr>
    <td><center><font face="Arial" size="1">{{ $l->idlu }}</font></td>
    <td><font face="Arial" size="1">{{  $l->lugar}}</font></td>
    <td><font face="Arial" size="1">{{$l->calle}}</font></td>
    <td><font face="Arial" size="1">{{$l->colonia}}</font></td>
    <td><font face="Arial" size="1">{{$l->num_exterior}}</font></td>
    <td><font face="Arial" size="1">{{ $l->municipios->municipio }}</font></td>
    </tr>
    </tbody>
    @endforeach
</table>
</div>
</body>
</html>