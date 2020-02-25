
                 <table class="table table-borderless table-striped table-earning" id="reportes">
    <thead>
                                    <tr>
                                                <th style="text-align: center;">CLAVE DE LA ASIGNACIÓN</th>
                                                <th style="text-align: center;">LUGAR</th>
                                                <th style="text-align: center;">NIVEL</th> 
                                                <th style="text-align: center;">HORARIO</th>
                                                <th style="text-align: center;">PROFESOR</th>
                                                <th style="text-align: center;">CATEGORIA</th>
                                                <th style="text-align: center;">EMPRESA</th>
                                                <th style="text-align: center;">GRUPO</th>
                                                <!--<th style="text-align: center;">ALUMNO</th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($detalle_clavesd as $det)
                                            <tr>  
                                                <td style="text-align: center;">{{$det->iddc}}</td>
                                                <td>{{$det->lugares->lugar}}</td>
                                                <td>{{$det->niveles->Nivel}}</td>
                                                <td>{{$det->horarios->horario}}</td>
                                                <td>{{$det->profesores->nombre}} {{$det->profesores->ap_emp}} {{$det->profesores->am_emp}}</td>
                                                <td>{{$det->categorias->nombre_categoria}}</td>
                                                <td>{{$det->empresas->nombreempresa}}</td>
                                                <td>{{$det->dgrupos->nombre_grupo}}</td> 
												   
												 <!--<td>{{$det->nombre}} {{$det->ap_emp}} {{$det->am_emp}}</td>-->
												
                                            </tr>
											
                                            @endforeach
</table>