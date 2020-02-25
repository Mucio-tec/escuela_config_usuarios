@extends('principal')

@section('contenido')

 <div class="section__content section__content--p30">
                    <div class="container-fluid">
                            @if(Session::has('exito'))
                            <div class="alert alert-success">
                              {{ Session::get('exito')}}
                            </div>
                            @endif
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">ALTA ALUMNOS</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Ingresa Datos del Alumno</h3>
                                        </div>
                                        <hr>
<form action = "{{ route('guardaalumno')}}" method = "POST">
{{csrf_field()}}

 
@if($errors->first('idalum'))
<i> {{ $errors->first('idalum') }} </i>
@endif	<p>
<table><tr><td>Clave Alumno</td><td style="width:100px"><input  class="form-control" type='text'  name='idalum' value="{{ $idalum}}">
</td>
</td></tr></table>
<br>

<table><tr><td>
<td style="width:1px" align ="right">
Nombre:</td><td style="width:320px">
@if($errors->first('nombre'))
<p class="text-danger"><i> {{ $errors->first('nombre') }} </i></p>
@endif
<input  class="form-control"  placeholder="Ingrese Nombre del alumno" type='text'  name='nombre'  value="{{old ('nombre')}}" >

<td style="width:150px" align ="right">
Apellido Paterno:
</td><td style="width:320px">
         @if($errors->first('ap_emp'))
<p class="text-danger"><i> {{ $errors->first('ap_emp') }} </i></p>
@endif	<input class="form-control" type='text' name='ap_emp' placeholder="Ingrese Apellido Paterno" value="{{ old('ap_emp')}}" required>

<td style="width:150px" align ="right">
Apellido Materno: 
</td><td style="width:320px">
@if($errors->first('am_emp'))
<p class="text-danger"><i> {{ $errors->first('am_emp') }} </i></p>
@endif	<input class="form-control" type='text' name='am_emp' placeholder="Ingrese Apellido Materno" value="{{old ('am_emp')}}" required>
</p></td><td style="width:150px" align ="right">
</td>
</tr>
</table>
<br>
<table>
    <tr>
        <td>
<table><tr><td style="width:6px" align ="right">
Edad:</td><td> @if($errors->first('edad'))
<p class="text-danger"><i> {{ $errors->first('edad') }} </i></p>
@endif	
<input class="form-control" type='text' name='edad' placeholder="Ingrese Edad" value="{{  old('edad')}}" required>
</p></td><td style="width:50px" align ="right">
    
        Sexo: </td><td> @if($errors->first('sexo'))
    <p class="text-danger"><i> {{ $errors->first('sexo') }} </i></p>
    @endif	<input class="form-control" type='text' name='sexo' placeholder="Ingrese Sexo" value="{{ old('sexo')}}"required>
</p></td><td style="width:70px" align ="right">

    Telefono:
    <br>
    <td> @if($errors->first('telefono'))
        <p class="text-danger"><i> {{ $errors->first('telefono') }} </i></p>
        @endif	
        <input class="form-control" type='text' name='telefono' placeholder="Ingrese Telefono" value="{{ old('telefono')}}"required>
        </p></td><td style="width:0px" align ="right">
            
                <td style="width:160px" align ="right">
                    Correo Electronico:</td><td> @if($errors->first('correo'))
                        <p class="text-danger"><i> {{ $errors->first('correo') }} </i></p>
                        @endif	
                        <input class="form-control" type='text' name='correo' placeholder="Ingrese Correo Electronico" value="{{old('correo')}}" required>
                    </p></td><td style="width:70px" align ="right">
                    </tr>
                </td>
            </tr>
        </td>
</table> 
</table>
</table>
</td></tr>
</table>
</table>        
<table>
   <tr>
       <td>                                          
<table><tr><td style="width:6px" align ="right">
Calle</td><td> @if($errors->first('calle'))
    <p class="text-danger"><i> {{ $errors->first('calle') }} </i></p>
    @endif	<input class="form-control" type='text' name='calle' placeholder="Ingrese Calle" value="{{ old ('calle')}}" required>
</p></td><td style="width:50px" align ="right">

            Colonia</td><td> @if($errors->first('colonia'))
            <p class="text-danger"><i> {{ $errors->first('colonia') }} </i></p>
            @endif	<input class="form-control" type='text' name='colonia' placeholder="Ingrese Colonia" value="{{ old('colonia')}}" required>
            </p></td><td style="width:70px" align ="right">

                    <td style="width:0px" align ="right">
                            Núm_ext:</td><td> @if($errors->first('num_calle'))
                                    <p class="text-danger"><i> {{ $errors->first('num_calle') }} </i></p>
                                    @endif	<input class="form-control" type='text' name='num_calle' placeholder="Número de Casa" value="{{ old('num_calle')}}" required>
                                </p></td><td style="width:100px" align ="right">
                                        Código Postal:</td><td> @if($errors->first('cp'))
                                                <p class="text-danger"><i> {{ $errors->first('cp') }} </i></p>
                                                @endif	
                                                <input class="form-control" type='text' name='cp' placeholder="Ingrese Código Postal" value="{{old ('cp')}}" required>
                                                </p></td><td style="width:10px" align ="right">
                                              
        </td>
    </tr>
        </table>
        <center>
        <table><tr><td style="width:0px" align ="right">

                    <td style="width:50px" align ="right">            
                        Seleccione Municipio:</td><td>  
@if($errors->first('idmun'))
<p class="text-danger"><i> {{ $errors->first('idmun') }} </i></p>
@endif<select name = 'idmun' class="form-control" >
<option value = ''>Seleccione un Municipio</option>
@foreach($municipios as $m)
<option value = '{{ $m->idmun}}'>{{  $m->municipio}}</option>
@endforeach
</select>
<td style="width:60px" align ="right"> 
Status:</td><td>
<select name="activo"  id="" class="form-control" required>
        <option value="0">Seleccione Campo</option>
        <option value="si">Activo</option>
        <option value="no">Inactivo</option>
    </select>
    {{ $errors->first('activo') }}
</p></td><td style="width:200px" align ="right">
</td>
</tr>
</table>
</center>
<br>
                                            <div>
                                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-lock fa-lg"></i>
                                                    <span id="payment-button-amount">Guardar</span>
                                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                </button>
                                            </div>
                                        </form>
										@if (Session::has('exito'))
									<div class="alert alert-success alert-dismissable data-dismiss=alert">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
									<strong>{{ Session::get('exito') }}</strong>
								    </div>
								    @endif
                                    </div>
                                </div>
                            </div>
                         </div>



            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        

    </div>
   </div> 
   @stop