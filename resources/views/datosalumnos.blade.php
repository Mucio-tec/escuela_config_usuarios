<BR>
<table id="alumno" border="1px" style="width: 398px; height: 38px;">
                                        <thead style="background: powderblue;">
                                            <tr>
                                            <th style="text-align: center;">NOMBRE ALUMNO</th>
                                                <th style="text-align: center;">EDAD</th>
                                                <th style="text-align: center;">DIRECCION</th>
                                                <th style="text-align: center;">TELEFONO</th>
                                                <th style="text-align: center;">CORREO</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($alumnos as $alu)
                                            <tr>  
											<td>{{$alu->nombre}} {{$alu->ap_emp}} {{$alu->am_emp}}</td>
                                                <td>{{$alu->edad}}</td>
                                                <td>{{$alu->calle}}, #{{$alu->num_calle}}, {{$alu->colonia}}   </td>
                                                <td>{{$alu->telefono}}</td>
                                                <td>{{$alu->correo}}</td>
												                                            </tr>
											
                                            @endforeach
											
                                        </tbody>
                                    </table>
									<br>