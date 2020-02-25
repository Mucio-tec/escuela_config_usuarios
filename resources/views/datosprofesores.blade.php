<BR>
<table id="informacionprof" border="1px" style="width: 398px; height: 38px;">
                                        <thead style="background: powderblue;">
                                            <tr>
                                            <th style="text-align: center;">NOMBRE PROFESOR</th>
                                                <th style="text-align: center;">EDAD</th>
                                                <th style="text-align: center;">DIRECCION</th>
                                                <th style="text-align: center;">TELEFONO</th>
                                                <th style="text-align: center;">CORREO</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($profesores as $prof)
                                            <tr>  
											<td>{{$prof->nombre}} {{$prof->ap_emp}} {{$prof->am_emp}}</td>
                                                <td>{{$prof->edad}}</td>
                                                <td>{{$prof->calle}}, #{{$prof->num_calle}}, {{$prof->colonia}}   </td>
                                                <td>{{$prof->telefono}}</td>
                                                <td>{{$prof->correo}}</td>
												                                            </tr>
											
                                            @endforeach
											
                                        </tbody>
                                    </table>
									<br>