<br><br>
<table id="tablaavances" border="1px">
    <thead style="background: powderblue;">
        <tr>
            <th style="text-align: center;">CLAVE DE LA ASIGNACIÓN</th>
            <th style="text-align: center;">LUGAR</th>
            <th style="text-align: center;">NIVEL</th> 
            <th style="text-align: center;">HORARIO</th>
            <th style="text-align: center;">PROFESOR</th>
            <th style="text-align: center;">CATEGORIA</th>
            <th style="text-align: center;">EMPRESA</th>
            <th style="text-align: center;">GRUPO</th>
            <th style="text-align: center;">OPCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach($detalle_clavesdb as $det)
            <tr>  
                <td>{{$det->iddc}}</td>
                <td>{{$det->lugar}}</td>
                <td>{{$det->Nivel}}</td>
                <td>{{$det->horario}}</td>
                <td>{{$det->nombre}} {{$det->ap_emp}} {{$det->am_emp}}</td>
				<td>{{$det->nombre_categoria}}</td>
				<td>{{$det->nombreempresa}}</td>
				<td>{{$det->nombre_grupo}}</td>
                <td>
                    <form action='' method = 'POST' 
                            name='frmdo{{$det->iddc}}' id='frmdo{{$det->iddc}}' target='_self'>
                        <input type = 'hidden' value = '{{$det->iddc}}' name = 'iddc' id= 'iddc'>
                        <input type='button' name='borrar' class='borrar' value='borrar' />
                    </form>   
                </td>
			</tr>
		@endforeach
	</tbody>
</table>
<script type="text/javascript">
    $(function () {
        $('.borrar').click(
            function () {
                formulario = this.form;
                $("#grupoasignado").load('{{url('borraregistroprofesor')}}' + '?' + $(this).closest('form').serialize()) ;
            }
        );
    });
</script>