<html>
<body>
<style>
table { border-collapse: collapse; /* Los bordes de la tabla aparecen juntos */ } 
td,th { border: 1px solid black; } 
</style>
                        <table class="table table-borderless table-striped table-earning" id="repor">
                        <caption><h4><font face="Arial" size="3">Asignacion de Grupo</font></h4></caption> 
    <thead>
                                    <tr>
                                                <th><center><font face="Arial" size="1">Clave</font></center></th>
                                                <th><center><font face="Arial" size="1">Nivel</font></center></th> 
                                                <th><center><font face="Arial" size="1">Modulo</font></center></th>
                                                <th><center><font face="Arial" size="1">Categoria</font></center></th>
                                                <th><center><font face="Arial" size="1">Empresa</font></center></th>
                                                <th><center><font face="Arial" size="1">Grupo</font></center></th>
                                                <th><center><font face="Arial" size="1">Horario</font></center></th>
                                                <th><center><font face="Arial" size="1">Alumno</font></center></th>
                                                <!--<th style="text-align: center;">ALUMNO</th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($resultadoa as $gru)
                                            <tr>  
                                                <td><center><font face="Arial" size="1">{{$gru->id_dgrupo}}</font></center></td>
                                                <td><font face="Arial" size="1">{{$gru->Nivel}}</font></td>
                                                <td><font face="Arial" size="1">{{$gru->modulo}}</font></td>
												 <td><font face="Arial" size="1">{{$gru->nombre_categoria}}</font></td>
												  <td><font face="Arial" size="1">{{$gru->nombreempresa}}</font></td>
												   <td><font face="Arial" size="1">{{$gru->nombre_grupo}}</font></td>
                                                <td><font face="Arial" size="1">{{$gru->horario}}</font></td>
                                                <td><font face="Arial" size="1">{{$gru->nombre}} {{$gru->ap_emp}} {{$gru->am_emp}}</font></td>
                                                @endforeach
</table>
</div>
</body>
</html>
