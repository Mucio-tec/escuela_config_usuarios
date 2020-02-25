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
                                    <div class="card-header">ALTA Documento</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Documentos Principales</h3>
                                        </div>
                                        <hr>
<form action = "{{ route('guardadocumento')}}" method = "POST" enctype="multipart/form-data">
{{csrf_field()}}

 
@if($errors->first('idd'))
<i> {{ $errors->first('idd') }} </i>
@endif	<p>
<table><tr><td>Clave Documento</td><td style="width:100px"><input  class="form-control" type='text'  name='idd' value="{{ $idd}}">
</td>
</td></tr></table>
<br>

<table><tr><td>
<td style="width:1px" align ="right">
Documento:</td>
<br>
<td style="width:600px">
@if($errors->first('documento'))
<p class="text-danger"><i> {{ $errors->first('documento') }} </i></p>
@endif
<input  class="form-control"  placeholder="Ingrese el Documento" type='file'  name='documento'  value="{{old ('documento')}}" >
<br>
</td>
<td style="width:1px" align ="right">
Fecha:</td>
<br>
<td style="width:300px">
@if($errors->first('fecha'))
<p class="text-danger"><i> {{ $errors->first('fecha') }} </i></p>
@endif
<input  class="form-control"  placeholder="Ingrese Fecha" type='text'  name='fecha'  value="{{old ('fecha')}}" >
<br>

<td style="width:1px" align ="right">
Descripción:</td>
<br>
<td style="width:300px">
@if($errors->first('fecha'))
<p class="text-danger"><i> {{ $errors->first('fecha') }} </i></p>
@endif
<textarea class="form-control" type='text'  name='descripcion'  value="{{old ('descripcion')}}">
</textarea>
<!--<input  class="form-control"  type='text'  name='descripcion'  value="{{old ('descripcion')}}" >-->
<br>
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