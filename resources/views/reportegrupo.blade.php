

<div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                <div class="col-md-12">
                  
                   			<div  style="text-align: center;">
                               
						
                        <table class="table table-borderless table-striped table-earning" id="reporgrup">
    <thead>
                                    <tr>
                                                <th style="text-align: center;">CLAVE DE LA ASIGNACIÓN</th>
                                                <th style="text-align: center;">NIVEL</th> 
                                                <th style="text-align: center;">MODULO</th>
                                                <th style="text-align: center;">CATEGORIA</th>
                                                <th style="text-align: center;">EMPRESA</th>
                                                <th style="text-align: center;">GRUPO</th>
                                                <th style="text-align: center;">HORATIO</th>
                                                <th style="text-align: center;">ALUMNO</th>
                                                <!--<th style="text-align: center;">ALUMNO</th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($detalle_grupos as $gru)
                                            <tr>  
                                                <td style="text-align: center;">{{$gru->id_dgrupo}}</td>
                                                <td>{{$gru->niveles->Nivel}}</td>
                                                <td>{{$gru->modulos->modulo}}</td>
												 <td>{{$gru->categorias->nombre_categoria}}</td>
												  <td>{{$gru->empresas->nombreempresa}}</td>
												   <td>{{$gru->grupos->nombre_grupo}}</td>
                                                <td>{{$gru->horarios->horario}}</td>
                                                <td>{{$gru->alumnos->nombre}} {{$gru->alumnos->ap_emp}} {{$gru->alumnos->am_emp}}</td>
												
                                            </tr>
											
                                            @endforeach
</table>
</div>
 