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
            <th><center><font face="Arial" size="1">Horario</font></center></th>
            <th><center><font face="Arial" size="1">Horas</font></center></th>
           
    
        </tr>
    </thead>
    <tbody>
    @foreach($horarios as $h)
    <tr>
    <td><center><font face="Arial" size="1">{{ $h->idh }}</font></center></td>
    <td><center><font face="Arial" size="1">{{  $h->horario}}</font></center></td>
    <td><center><font face="Arial" size="1">{{  $h->horas}}</font></center></td>
    </tbody>
    @endforeach
</table>
</div>
</body>
</html>