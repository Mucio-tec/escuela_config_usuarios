<BR>
<table id="informacion" border="1px" style="width: 398px; height: 38px;">
                                        <thead style="background: powderblue;">
                                            <tr>
                                            <th style="text-align: center;">NOMBRE EMPRESA</th>
                                                <th style="text-align: center;">DIRECCION</th>
                                                <th style="text-align: center;">FOTO</th>
                                                <th style="text-align: center;">ENCARGADO</th>
                                                <th style="text-align: center;">TELEFONO</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($empresas as $empre)
                                            <tr>  
											<td>{{$empre->nombreempresa}}</td>
                                                <td>{{$empre->direccion}}</td>
                                                <td>
							
												<img src = "{{asset('images/'.$empre->foto)}}"
                                                height =100 width=100>
											
												</td>
                                                <td>{{$empre->encargado}}</td>
                                                <td>{{$empre->telefono}}</td>
												                                            </tr>
											
                                            @endforeach
											
                                        </tbody>
                                    </table><br>