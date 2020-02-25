@extends('principal')
@section('contenido')
	<script type="text/javascript">
$(document).ready(function(){
      
	  
	  $("#id_grupo").click(function() {
         $("#reportesgru").load('{{url('filtrogrupo')}}' + '?id_grupo='  +this.options[this.selectedIndex].value)
			$("#reporgrup").remove();
			});
});
</script>
<div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row m-t-30">
                <div class="col-md-12">
                        <h3 class="text-center title-2">Reporte Asiganacion de Grupos</h3>
                  
                   			<div  style="text-align: center;">
								<div  style="text-align: center;">
                                <a href="{{ route('detalle_grupos') }}">
                         <button class="btn btn-primary btn-sm">Informe PDF </button></a> 
                         <a href="{{ route('exportbasico') }}">
                         <button class="btn btn-primary btn-sm">Informe grupo 1 </button></a> 
                         <a href="{{ route('exportados') }}">
                         <button class="btn btn-primary btn-sm">Informe grupo 2 PDF </button></a> 
                         <a href="{{ route('exportatres') }}">
                         <button class="btn btn-primary btn-sm">Informe grupo3S PDF </button></a> 
								<form>
								<br>
								<label for="cc-payment" class="control-label mb-1"  style="text-align: center;">Grupos</label> <br>
                                        <select name = "id_grupo" id="id_grupo" style="width: 398px; height: 38px;" >
                                    @foreach($grupos as $grup)
									<option value = '{{$grup->id_grupo}}'>{{$grup->nombre_grupo}}</option>
									@endforeach
                                  </select>
								</div></form></div>
<div id='reportesgru'></div>

                        <table class="table table-borderless table-striped table-earning" id="reporgrup">
    <thead>
                                    <tr>
                                                <th style="text-align: center;">CLAVE DE LA ASIGNACIÓN</th>
                                                <th style="text-align: center;">NIVEL</th> 
                                                <th style="text-align: center;">MODULO</th>
                                                <th style="text-align: center;">CATEGORIA</th>
                                                <th style="text-align: center;">EMPRESA</th>
                                                <th style="text-align: center;">GRUPO</th>
                                                <th style="text-align: center;">HORATIO</th>
                                                <th style="text-align: center;">ALUMNO</th>
                                                <!--<th style="text-align: center;">ALUMNO</th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($detalle_grupos as $gru)
                                            <tr>  
                                                <td style="text-align: center;">{{$gru->id_dgrupo}}</td>
                                                <td>{{$gru->Nivel}}</td>
                                                <td>{{$gru->modulo}}</td>
												 <td>{{$gru->nombre_categoria}}</td>
												  <td>{{$gru->nombreempresa}}</td>
												   <td>{{$gru->nombre_grupo}}</td>
                                                <td>{{$gru->horario}}</td>
                                                <td>{{$gru->nombre}} {{$gru->ap_emp}} {{$gru->am_emp}}</td>
												
                                            </tr>
											
                                            @endforeach
</table>
</div>
    @stop