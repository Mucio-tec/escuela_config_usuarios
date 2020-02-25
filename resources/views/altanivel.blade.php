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
                                    <div class="card-header">ALTA NIVELES</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Ingresa Datos  de NivelesS</h3>
                                        </div>
                                        <hr>
<form action = "{{ route('guardanivel')}}" method = "POST">
{{csrf_field()}}

 
@if($errors->first('id_niv'))
<i> {{ $errors->first('id_niv') }} </i>
@endif	<p>
<table><tr><td>Clave nivel</td><td style="width:100px"><input  class="form-control" type='text'  name='id_niv' value="{{ $id_niv}}">
</td>
</td></tr></table>
<br>

<table><tr><td>
<td style="width:1px" align ="right">
Nivel:</td><td style="width:320px">
@if($errors->first('Nivel'))
<p class="text-danger"><i> {{ $errors->first('Nivel') }} </i></p>
@endif
<input  class="form-control"  placeholder="Ingrese el Nivel" type='text'  name='Nivel'  value="{{old ('Nivel')}}" >
<br>
<td style="width:100px" align ="right">
        Status</td><td style="width:320px">
    <select name="activo" id="" class="form-control">
        <option value="0">Seleccione Campo</option>
        <option value="si">Activo</option>
        <option value="no">Inactivo</option>
    </select>
    {{ $errors->first('activo') }}
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