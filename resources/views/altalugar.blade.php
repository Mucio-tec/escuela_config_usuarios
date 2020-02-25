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
                                    <div class="card-header">ALTA LUGAR</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Ingresa Datos del Lugar</h3>
                                        </div>
                                        <hr>
<form action = "{{ route('guardalugar')}}" method = "POST">
{{csrf_field()}}

 
@if($errors->first('idlu'))
<i> {{ $errors->first('idlu') }} </i>
@endif	<p>
<table><tr><td>Clave Alumno</td><td style="width:100px"><input  class="form-control" type='text'  name='idlu' value="{{ $idlu}}" readonly = 'readonly' required >
</td>
</td></tr></table>
<br>

<table><tr><td style="width:40px" align ="right">
<td style="width:1px" align ="right">
Lugar</td><td style="width:320px">
@if($errors->first('lugares'))
<p class="text-danger"><i> {{ $errors->first('lugares') }} </i></p>
@endif
<input  class="form-control"  placeholder="Ingrese el Lugar" type='text'  name='lugar'  value="{{old ('lugar')}}" required>

<td style="width:150px" align ="right">
Calle:
</td><td style="width:320px">
         @if($errors->first('calle'))
<p class="text-danger"><i> {{ $errors->first('calle') }} </i></p>
@endif	<input class="form-control" type='text' name='calle' placeholder="Ingrese la Calle" value="{{ old('calle')}}" required>

<td style="width:150px" align ="right">
Colonia: 
</td><td style="width:320px">
@if($errors->first('colonia'))
<p class="text-danger"><i> {{ $errors->first('colonia') }} </i></p>
@endif	<input class="form-control" type='text' name='colonia' placeholder="Ingrese la Colonia" value="{{old ('colonia')}}" required>
</p></td><td style="width:150px" align ="right">
</td>
</tr>
</table>
<br>
<table><tr><td style="width:40px" align ="right">
        <td style="width:100px" align ="right">
Número Exterior:</td><td> @if($errors->first('num_exterior'))
<p class="text-danger"><i> {{ $errors->first('num_exterior') }} </i></p>
@endif	
<input class="form-control" type='text' name='num_exterior' placeholder="Ingrese num_exterior" value="{{  old('num_exterior')}}" required>
</p></td><td style="width:150px" align ="right">
            
                        Seleccione Municipio:</td><td>  
@if($errors->first('idmun'))
<p class="text-danger"><i> {{ $errors->first('idmun') }} </i></p>
@endif<select name = 'idmun' class="form-control" required>
<option value = ''>Seleccione un Municipio</option>
@foreach($municipios as $m)
<option value = '{{ $m->idmun}}'>{{  $m->municipio}}</option>
@endforeach
</select>
<td style="width:150px" align ="right">
        Status:</td><td>
    <select name="activo" id="" class="form-control" required>
        <option value="0">Seleccione Campo</option>
        <option value="si">Activo</option>
        <option value="no">Inactivo</option>
    </select>
    {{ $errors->first('activo') }}
</p></td>
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