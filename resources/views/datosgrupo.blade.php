
@foreach($grupos as $gru)
<option value = '{{$gru->id_grupo}}'>{{$gru->nombre_grupo}}</option>
@endforeach
           
		