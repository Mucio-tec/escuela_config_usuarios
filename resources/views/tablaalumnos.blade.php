<BR><BR>
<table id="tablaavances" border="1px">
    <thead style="background: powderblue;">
        <tr>
            <th style="text-align: center;">CLAVE DE LA ASIGNACIÓN</th>
            <th style="text-align: center;">NIVEL</th> 
            <th style="text-align: center;">MODULO</th>
            <th style="text-align: center;">CATEGORIA</th>
            <th style="text-align: center;">EMPRESA</th>
            <th style="text-align: center;">GRUPO</th>
            <th style="text-align: center;">HORARIO</th>
            <th style="text-align: center;">ALUMNO</th>
            <th style="text-align: center;">OPCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach($detalle_grupos as $det)
            <tr>  
                <td>{{$det->id_dgrupo}}</td>
                <td>{{$det->Nivel}}</td>
                <td>{{$det->modulo}}</td>
                <td>{{$det->nombre_categoria}}</td>
                <td>{{$det->nombreempresa}}</td>
                <td>{{$det->nombre_grupo}}</td>
				<td>{{$det->horario}}</td>
                <td>{{$det->nombre}} {{$det->ap_emp}} {{$det->am_emp}}</td>
                <td>
                    <form action='' method = 'POST' 
                            name='frmdo{{$det->id_dgrupo}}' id='frmdo{{$det->id_dgrupo}}' target='_self'>
                        <input type = 'text' value = '{{$det->id_dgrupo}}' name = 'id_dgrupo' id= 'id_dgrupo'>
                        <input type='button' name='borraral' class='borraral' value='borrar' />
                    </form>   
                </td>
            </tr>
		@endforeach
    </tbody>
</table>
<script type="text/javascript">
    $(function () {
        $('.borraral').click(
            function () {
                formulario = this.form;
                $("#grupoasignadoalu").load('{{url('borraregistroalumno')}}' + '?' + $(this).closest('form').serialize()) ;
            }
        );
    });
</script>