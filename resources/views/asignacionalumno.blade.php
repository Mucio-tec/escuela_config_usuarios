@extends('principal')

@section('contenido')
<script type="text/javascript">
$(document).ready(function(){
	
	   		$("#id_categoria").click(function() {
			$("#idempresa").load('{{url('obtieneDatosEmpresaEscuela')}}' + '?id_categoria=' + this.options[this.selectedIndex].value) ;
			$("#id_grupo").load('{{url('obtieneDatosGrupo')}}' + '?id_categoria=' + this.options[this.selectedIndex].value) ;
			});
			
			$("#idempresa").click(function() {
			$("#informacion").load('{{url('obtieneEmpresaEscuela')}}' + '?idempresa=' + this.options[this.selectedIndex].value) ;
			});
			
				$("#idalum").click(function() {
			$("#alumno").load('{{url('obtienedatosalumno')}}' + '?idalum=' + this.options[this.selectedIndex].value) ;
			});
			
			 $("#guardar").click(function() {	
         $("#grupoasignadoalu").load('{{url('guardarasignaciongrupo')}}'+ '?' + $(this).closest('form').serialize()) ;
       });
});

</script>
 <div class="section__content section__content--p30">
                    <div class="container-fluid">
                            @if(Session::has('exito'))
                            <div class="alert alert-success">
                              {{ Session::get('exito')}}
                            </div>
                            @endif
                        <div class="row m-t-30">
                            <div class="col-md-12">
							  <div class="user-data__footer"><a href="{{ route('reportegrupo') }}">
                         <button  class=" btn btn-success">Reporte</button></a>
                    </div>	
                                    <div class="card-header">Grupos</div>
                                   <!-- <div class="card-body">-->
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Ingresa Datos </h3>
                                        </div>
                                        <hr>
										
										 <form id="asignargrupo" align="center">  
								<center>                               
		  {{csrf_field()}}                               
		  <div class="form-groupsj"  style="width:50%; float:left; height: 350px;">
           @if($errors->first('iddgrupos')) 
           <i> {{ $errors->first('iddgrupos') }} </i> 
            @endif
       <label for="cc-payment" class="control-label mb-1"  style="text-align: center;">Clave</label>
        <input id="cc-pament" name="iddgrupos" type="text" class="form-control" 
       aria-required="true" aria-invalid="false" value="{{$iddgrupos}}" readonly ='readonly' style="width: 398px; height: 38px;">
											
				    <label for="cc-payment" class="control-label mb-1"  style="text-align: center;">Nivel</label><br>
					   <select name = "id_niv" id="id_niv" style="width: 398px; height: 38px;" >
                        @foreach($niveles as $niv)
			           <option value = '{{$niv->id_niv}}'>{{$niv->Nivel}}</option>
		                 	@endforeach
                        </select>
				<br>									
	      <label for="cc-payment" class="control-label mb-1"  style="text-align: center;">Modulo</label><br>
                    <select name = "idmod" id="idmod" style="width: 398px; height: 38px;" >
                    @foreach($modulos as $lug)
			        <option value = '{{$lug->idmod}}'>{{$lug->modulo}}</option>
		          	@endforeach
                    </select>
				  <br>								  
								   <label for="cc-payment" class="control-label mb-1"  style="text-align: center;">Categoria</label><br>
                                        <select name = "id_categoria" id="id_categoria" style="width: 398px; height: 38px;" >
                                    @foreach($categorias as $cat)
			                        <option value = '{{$cat->id_categoria}}'>{{$cat->nombre_categoria}}</option>
		                        	@endforeach
                                  </select>
								  <br>
								  
								  <label for="cc-payment" class="control-label mb-1"  style="text-align: center;">Empresa/Escuela</label><br>
                                        <select name = "idempresa" id="idempresa" style="width: 398px; height: 38px;" >
                                    
                                  </select>
								  <div id="informacion"></div>
								
								  <label for="cc-payment" class="control-label mb-1"  style="text-align: center;">Grupo</label>  <br>
                                        <select name = "id_grupo" id="id_grupo" style="width: 398px; height: 38px;" >
                                    
                                  </select>
								  <br>
								   <label for="cc-payment" class="control-label mb-1"  style="text-align: center;">Horario</label>  <br>
                                        <select name = "idh" id="idh" style="width: 398px; height: 38px;" >
                                    @foreach($horarios as $hor)
									<option value = '{{$hor->idh}}'>{{$hor->horario}}</option>
									@endforeach
                                  </select>
								  <br> 
								   <label for="cc-payment" class="control-label mb-1"  style="text-align: center;">Alumnos</label>  <br> 
                                        <select name = "idalum" id="idalum" style="width: 398px; height: 38px;" >
                                    @foreach($alumnos as $alu)
									<option value = '{{$alu->idalum}}'>{{$alu->nombre}} {{$alu->ap_emp}} {{$alu->am_emp}}</option>
									@endforeach
                                  </select>
								 <div id="alumno"></div>
								 <br>

									<button type="button" name = "guardar" id="guardar"
									style="width: 398px; height: 38px;height: 55px;"
									
                                    class="btn btn-lg btn-info btn-block" >Guardar</button>
							
									<div id='grupoasignadoalu'>
									
									</div>
                                    </div>
									  
                                </form>
							
								
										@if (Session::has('exito'))
									<div class="alert alert-success alert-dismissable data-dismiss=alert">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
									<strong>{{ Session::get('exito') }}</strong>
								    </div>
								    @endif
                                    <!--</div>-->
                               
                            </div>
                         </div>



            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        

    </div>
   </div> 
   @stop