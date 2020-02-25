@extends('principal')
@section('contenido')
	<script type="text/javascript">
$(document).ready(function(){
      
	  
	$("#idprof").click(function() {
			
        $("#reportes").load('{{url('filtro')}}' + '?idprof='  +this.options[this.selectedIndex].value)
		$("#repor").remove();

	});

});
</script>
<div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                <div class="col-md-12">
                        <h3 class="text-center title-2">Reporte Asiganacion de Profesores</h3>
                        <a href="{{ route('detalle_claves') }}">
                            <button class="btn btn-primary btn-sm ">Informacion Global de Profesores</button>
                         </a>  
                         <a href="{{ route('profesoruno') }}">
                         <button class="btn btn-primary btn-sm">Profesor Edgar</button></a>  
                         <a href="{{ route('profesordos') }}">
                         <button class="btn btn-primary btn-sm">Profesor Javier</button></a>  
                   			<div  style="text-align: center;">
								<form>
								<br>
								<label for="cc-payment" class="control-label mb-1"  style="text-align: center;">Profesor</label> <br>
                                        <select name = "idprof" id="idprof" style="width: 398px; height: 38px;" >
                                    @foreach($profesores as $pro)
									<option value = '{{$pro->idprof}}'>{{$pro->nombre}} {{$pro->ap_emp}} {{$pro->am_emp}}</option>
									@endforeach
                                  </select>
								</div></form></div>
<div id='reportes'></div>			 						 


                        <table class="table table-borderless table-striped table-earning" id="repor">
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
                                        @foreach($detalle_claves as $det)
                                            <tr>  
                                                <td style="text-align: center;">{{$det->iddc}}</td>
                                                <td>{{$det->lugar}}</td>
                                                <td>{{$det->Nivel}}</td>
                                                <td>{{$det->horario}}</td>
                                                <td>{{$det->nombre}} {{$det->ap_emp}} {{$det->am_emp}}</td>
												 <td>{{$det->nombre_categoria}}</td>
												  <td>{{$det->nombreempresa}}</td>
												   <td>{{$det->nombre_grupo}}</td>
												 <!--<td>{{$det->nombre}} {{$det->ap_emp}} {{$det->am_emp}}</td>-->
												
                                            </tr>
											
                                            @endforeach
</table>
</div>
    @stop