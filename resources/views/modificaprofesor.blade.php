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
                                    <div class="card-header">MODIFICACIÓN PROFESOR</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Ingresa Datos del Profesor</h3>
                                        </div>
                                        <hr>
<form action = "{{ route('modificaprofesor',$editp->idprof)}}" method = "POST">
@csrf
@method('PUT')
 
@if($errors->first('idprof'))
<i> {{ $errors->first('idprof') }} </i>
@endif	<p>
<table><tr><td>Clave Alumno</td><td style="width:100px"><input  class="form-control" type='text'  name='idprof' value="{{ $editp->idprof}}" readonly = 'readonly'  >
</td>
</td></tr></table>
<br>

<table><tr><td>
<td style="width:1px" align ="right">
Nombre:</td><td style="width:320px">
@if($errors->first('nombre'))
<p class="text-danger"><i> {{ $errors->first('nombre') }} </i></p>
@endif
<input  class="form-control"  placeholder="Ingrese Nombre del alumno" type='text'  name='nombre'  value="{{  $editp->nombre}}" >

<td style="width:150px" align ="right">
Apellido Paterno:
</td><td style="width:320px">
         @if($errors->first('ap_emp'))
<p class="text-danger"><i> {{ $errors->first('ap_emp') }} </i></p>
@endif	<input class="form-control" type='text' name='ap_emp' placeholder="Ingrese Apellido Paterno" value="{{ $editp->ap_emp}}" >

<td style="width:150px" align ="right">
Apellido Materno: 
</td><td style="width:320px">
@if($errors->first('am_emp'))
<p class="text-danger"><i> {{ $errors->first('am_emp') }} </i></p>
@endif	<input class="form-control" type='text' name='am_emp' placeholder="Ingrese Apellido Materno" value="{{ $editp->am_emp}}" >
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
<input class="form-control" type='text' name='edad' placeholder="Ingrese Edad" value="{{  $editp->edad}}" >
</p></td><td style="width:50px" align ="right">
    
        Sexo: </td><td> @if($errors->first('sexo'))
    <p class="text-danger"><i> {{ $errors->first('sexo') }} </i></p>
    @endif	<input class="form-control" type='text' name='sexo' placeholder="Ingrese Sexo" value="{{ $editp->sexo}}" >
</p></td><td style="width:70px" align ="right">

    Telefono:
    <br>
    <td> @if($errors->first('telefono'))
        <p class="text-danger"><i> {{ $errors->first('telefono') }} </i></p>
        @endif	
        <input class="form-control" type='text' name='telefono' placeholder="Ingrese Telefono" value="{{ $editp->telefono}}" >
        </p></td><td style="width:0px" align ="right">
            
                <td style="width:160px" align ="right">
                    Correo Electronico:</td><td> @if($errors->first('correo'))
                        <p class="text-danger"><i> {{ $errors->first('correo') }} </i></p>
                        @endif	
                        <input class="form-control" type='text' name='correo' placeholder="Ingrese Correo Electronico" value="{{  $editp->correo}}" >
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
<table><tr><td style="width:40px" align ="right">
        
Calle</td><td> @if($errors->first('calle'))
    <p class="text-danger"><i> {{ $errors->first('calle') }} </i></p>
    @endif	<input class="form-control" type='text' name='calle' placeholder="Ingrese Calle" value="{{ $editp->calle}}" >
</p></td><td style="width:30px" align ="right">

            Colonia</td><td> @if($errors->first('colonia'))
            <p class="text-danger"><i> {{ $errors->first('colonia') }} </i></p>
            @endif	<input class="form-control" type='text' name='colonia' placeholder="Ingrese Colonia" value="{{ $editp->colonia}}" >
            </p></td>
            <td style="width:30px" align ="right">
                    Número de casa:</td><td> @if($errors->first('num_calle'))
                            <p class="text-danger"><i> {{ $errors->first('num_calle') }} </i></p>
                            @endif	<input class="form-control" type='text' name='num_calle' placeholder="Número de Casa" value="{{ $editp->num_calle}}" >
                        </p></td><td style="width:140px" align ="right">
                               
                    Código Postal:</td><td> @if($errors->first('cp'))
                        <p class="text-danger"><i> {{ $errors->first('cp') }} </i></p>
                        @endif	
                        <input class="form-control" type='text' name='cp' placeholder="Ingrese Código Postal" value="{{  $editp->cp}}" >
                        </p></td>
        
        </td>
    </tr>
        </table>
        <table><tr>
                    
                    
                <table><tr><td style="width:40px" align ="right">
                    <td style="width:50px" align ="right">
                  
            
                        Seleccione Municipio:</td><td>  
@if($errors->first('idmun'))
<p class="text-danger"><i> {{ $errors->first('idmun') }} </i></p>
@endif
<select name = 'idmun' class="form-control" required >
    <option value = '{{ $editp->municipios->idmun }}'>{{ $editp->municipios->municipio }}</option>
</select>
</p></td><td style="width:150px" align ="right">
</td>
</tr>
</table>
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