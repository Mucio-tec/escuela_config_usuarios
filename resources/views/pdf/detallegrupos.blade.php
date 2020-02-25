<html>
<body>
<style>
table { border-collapse: collapse; /* Los bordes de la tabla aparecen juntos */ } 
td,th { border: 1px solid black; } 
</style>

<table>
<caption><h4><font face="Arial" size="3">Asignacion de Profesores</font></h4></caption> 
    <thead>
        <tr>
            <th><center><font face="Arial" size="1">Clave</font></center></th>
            <th><center><font face="Arial" size="1">Lugar</font></center></th>
            <th><center><font face="Arial" size="1">Nivel</font></center></th> 
            <th><center><font face="Arial" size="1">Horario</font></center></th>
            <th><center><font face="Arial" size="1">Profesor</font></center></th>
            <th><center><font face="Arial" size="1">Categoria</font></center></th>
            <th><center><font face="Arial" size="1">Empresa</font></center></th>
            <th><center><font face="Arial" size="1">Grupo</font></center></th>
          
        </tr>
    </thead>
    <tbody>
        @foreach($resultado as $det)
            <tr>  
                <td><font face="Arial" size="1">{{$det->iddc}}</font></td>
                <td><font face="Arial" size="1">{{$det->lugar}}</font></td>
                <td><font face="Arial" size="1">{{$det->Nivel}}</font></td>
                <td><font face="Arial" size="1">{{$det->horario}}</font></td>
                <td><font face="Arial" size="1">{{$det->nombre}} {{$det->ap_emp}} {{$det->am_emp}}</font></td>
				<td><font face="Arial" size="1">{{$det->nombre_categoria}}</font></td>
				<td><font face="Arial" size="1">{{$det->nombreempresa}}</font></td>
				<td><font face="Arial" size="1">{{$det->nombre_grupo}}</font></td>
			</tr>
		@endforeach
	</tbody>
</table>
</body>
</html>