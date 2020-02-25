<?php
namespace documentoscontroller\Http\Controllers;

use Illuminate\Http\Request;

use documentoscontroller\Http\Requests;
use documentoscontroller\profesores;
use documentoscontroller\alumnos;
use documentoscontroller\lugares;
use documentoscontroller\niveles;
use documentoscontroller\empresas;
use documentoscontroller\grupos;
use documentoscontroller\horarios;
use documentoscontroller\categorias;
use documentoscontroller\detalle_claves;
use documentoscontroller\detalle_grupos;
use documentoscontroller\dclaves;
use documentoscontroller\dgrupos;
use PDF;


use Session;


class controladorgrupo extends Controller
{
	////-----
	/*public function __construct()
	{
		$this->middleware('auth');
	}*/
	////-----
  public function profesor()
    {
        $clavequesiguedc = dclaves::orderBy('iddclaves','desc')
            ->take(1)
			->get();
		$cuantos = count($clavequesiguedc);

        if ($cuantos==0)
                {
              $iddclaves = 1;
               }
               else
               {
                $iddclaves = $clavequesiguedc[0]->iddclaves+1;
               }
			   
			   $profesores = profesores::where('activo','=','si')
	                      ->orderBy('idprof','asc')
						  ->get();
				/*$alumnos = alumnos::where('activo','=','si')
	                      ->orderBy('idalum','asc')
						  ->get();*/
				$lugares = lugares::where('activo','=','si')
	                      ->orderBy('idlu','asc')
						  ->get();
				$niveles = niveles::where('activo','=','si')
	                      ->orderBy('id_niv','asc')
						  ->get();
				$categorias = categorias::where('activo','=','si')
	                      ->orderBy('id_categoria','asc')
						  ->get();
				$horarios = horarios::where('activo','=','si')
	                      ->orderBy('idh','asc')
						  ->get();
		
            return view ("asignaciongrupo")
				    ->with('iddclaves',$iddclaves)
					->with('profesores',$profesores)
					//->with('alumnos',$alumnos)
					->with('lugares',$lugares)
					->with('categorias',$categorias)
					->with('horarios',$horarios)
					->with('niveles',$niveles);
       
	}
	

    public function obtieneDatosEmpresaEscuela(Request $request)
    {
         $id_categoria = $request->get('id_categoria');
         $empresas = empresas::where('id_categoria','=',$id_categoria)->get();
        
         return view ('datosempresaescuela')->with('empresas',$empresas);
    }
	public function obtieneDatosGrupo(Request $request)
    {
         $id_categoria = $request->get('id_categoria');
         $grupos = grupos::where('id_categoria','=',$id_categoria)->get();
        
         return view ('datosgrupo')->with('grupos',$grupos);
    }
	
	 public function obtieneEmpresaEscuela(Request $request)
    {
         $idempresa = $request->get('idempresa');
         $empresas = empresas::where('idempresa','=',$idempresa)->get();
         return view ('datossempresaescuela')->with('empresas',$empresas);
    }
	
		 public function obtienedatosprofesor(Request $request)
    {
         $idprof = $request->get('idprof');
         $profesores = profesores::where('idprof','=',$idprof)->get();
         return view ('datosprofesores')->with('profesores',$profesores);
    }
	
	
	 public function guardar(Request $request)
    {
		$dclaves = dclaves::where('iddclaves',$request->iddclaves)->get();
       
		$cuantos = count($dclaves);
	
        if($cuantos==0){
			$dclaves = new dclaves;
			$dclaves->iddclaves = $request->iddclaves;
			//$dclaves->id_categoria = $request->id_categoria;
			$dclaves->save();

			$detalle_claves = new detalle_claves;
			$detalle_claves->iddc = $request->iddc;
			$detalle_claves->idlu = $request->idlu;
			$detalle_claves->id_niv = $request->id_niv;
			$detalle_claves->idh = $request->idh;
			$detalle_claves->idprof = $request->idprof;
			$detalle_claves->iddclaves = $request->iddclaves;
			$detalle_claves->idempresa = $request->idempresa;
			$detalle_claves->id_grupo = $request->id_grupo;
			$detalle_claves->id_categoria = $request->id_categoria;
			$detalle_claves->save();
		}else{
			$detalle_claves = new detalle_claves;
			$detalle_claves->iddc = $request->iddc;
			$detalle_claves->idlu = $request->idlu;
			$detalle_claves->id_niv = $request->id_niv;
			$detalle_claves->idh = $request->idh;
			$detalle_claves->idprof = $request->idprof;
			$detalle_claves->iddclaves = $request->iddclaves;
			$detalle_claves->idempresa = $request->idempresa;
			$detalle_claves->id_grupo = $request->id_grupo;
			$detalle_claves->id_categoria = $request->id_categoria;
			$detalle_claves->save();
		}
		$detalle_clavesdb=\DB::select("SELECT * FROM detalle_claves
		INNER JOIN lugares ON detalle_claves.idlu = lugares.idlu
		INNER JOIN niveles ON detalle_claves.id_niv = niveles.id_niv
		INNER JOIN horarios ON detalle_claves.idh = horarios.idh
		INNER JOIN profesores ON detalle_claves.idprof = profesores.idprof
		INNER JOIN dclaves ON detalle_claves.iddclaves = dclaves.iddclaves
		INNER JOIN empresas ON detalle_claves.idempresa = empresas.idempresa
		INNER JOIN grupos ON detalle_claves.id_grupo = grupos.id_grupo
		INNER JOIN categorias ON detalle_claves.id_categoria = categorias.id_categoria
		WHERE detalle_claves.iddclaves= ?
		ORDER BY detalle_claves.iddclaves DESC",[$request->iddclaves]);

		return view ('tablaregistrodetalleclaves')
			  ->with('detalle_clavesdb',$detalle_clavesdb);			
    }

 public function reporteprof()
	{
		  $profesores = profesores::where('activo','=','si')
	                      ->orderBy('idprof','asc')
						  ->get();
		
		
			 	$resultado=\DB::select("SELECT * FROM detalle_claves, lugares, niveles, horarios, profesores , dclaves , empresas, grupos, categorias
WHERE detalle_claves.idlu = lugares.idlu AND detalle_claves.id_niv = niveles.id_niv AND detalle_claves.idh = horarios.idh
AND detalle_claves.idprof = profesores.idprof AND detalle_claves.iddclaves = dclaves.iddclaves 
AND detalle_claves.idempresa = empresas.idempresa AND detalle_claves.id_grupo = grupos.id_grupo AND detalle_claves.id_categoria = categorias.id_categoria
ORDER BY detalle_claves.iddc;");
				  return view('reportegrupos')
				  ->with('detalle_claves',$resultado)
				  ->with('profesores',$profesores);   
        }
        	     
   	function filtro(request $request)
    {
		$idprof = $request->get('idprof');
        $detalle_clavesd = detalle_claves::where('idprof','=',$idprof)->get();
		//$lugares=lugares::all();
         
		return view ('tablareportegrupo')
		->with('detalle_clavesd',$detalle_clavesd);
		//->with('lugares',$lugares);
    }





	public function exportdg(){

		$resultado=\DB::select("SELECT * FROM detalle_claves, lugares, niveles, horarios, profesores , dclaves , empresas, grupos, categorias
		WHERE detalle_claves.idlu = lugares.idlu AND detalle_claves.id_niv = niveles.id_niv AND detalle_claves.idh = horarios.idh
		AND detalle_claves.idprof = profesores.idprof AND detalle_claves.iddclaves = dclaves.iddclaves 
		AND detalle_claves.idempresa = empresas.idempresa AND detalle_claves.id_grupo = grupos.id_grupo AND detalle_claves.id_categoria = categorias.id_categoria
		ORDER BY detalle_claves.iddc;");
		//dd($resultado);

		  
		$pdf = PDF::loadView ('pdf.detallegrupos', compact('resultado') );  
		return $pdf->download('Reportes.pdf');


	
	}
	
	public function profesoruno(){

		$resultadop=\DB::select("SELECT * FROM detalle_claves, lugares, niveles, horarios, profesores , dclaves , empresas, grupos, categorias
		WHERE detalle_claves.idlu = lugares.idlu 
		AND  profesores.idprof='1'
		AND detalle_claves.id_niv = niveles.id_niv 
		AND detalle_claves.idh = horarios.idh
		AND detalle_claves.idprof = profesores.idprof 
		AND detalle_claves.iddclaves = dclaves.iddclaves 
		AND detalle_claves.idempresa = empresas.idempresa 
		AND detalle_claves.id_grupo = grupos.id_grupo 
		AND detalle_claves.id_categoria = categorias.id_categoria
		ORDER BY detalle_claves.iddc;");
		//dd($resultado);

		  
		$pdf = PDF::loadView ('pdf.profesoruno', compact('resultadop') );  
		return $pdf->download('profesordetalle.pdf');


	
	}

	public function profesordos(){

		$resultadopd=\DB::select("SELECT * FROM detalle_claves, lugares, niveles, horarios, profesores , dclaves , empresas, grupos, categorias
		WHERE detalle_claves.idlu = lugares.idlu 
		AND  profesores.idprof='2'
		AND detalle_claves.id_niv = niveles.id_niv 
		AND detalle_claves.idh = horarios.idh
		AND detalle_claves.idprof = profesores.idprof 
		AND detalle_claves.iddclaves = dclaves.iddclaves 
		AND detalle_claves.idempresa = empresas.idempresa 
		AND detalle_claves.id_grupo = grupos.id_grupo 
		AND detalle_claves.id_categoria = categorias.id_categoria
		ORDER BY detalle_claves.iddc;");
		//dd($resultado);  
		$pdf = PDF::loadView ('pdf.profesordos', compact('resultadopd') );  
		return $pdf->download('profesordetalledos.pdf');


	
	}
	


















	public function borraregistroprofesor(Request $request)
    {
		$dclaves = detalle_claves::where('iddc',$request->iddc)->get();
     	$iddclaves = detalle_claves::where('iddclaves',$request->iddclaves)->get();
		
		 //DELETE FROM detalle_claves WHERE iddc = 20;

		 $borrarregistrolistaprofesor=\DB::delete("DELETE FROM detalle_claves 
		 WHERE iddc = ?", [$request->iddc]);

		 //detalle_claves::find($request->iddc)->delete();
         ////////////////////////////
     	//echo "borradclaves con clave $request->idvd con venta $idv ";
		$detalle_clavesdb=\DB::select("SELECT * FROM detalle_claves
		INNER JOIN lugares ON detalle_claves.idlu = lugares.idlu
		INNER JOIN niveles ON detalle_claves.id_niv = niveles.id_niv
		INNER JOIN horarios ON detalle_claves.idh = horarios.idh
		INNER JOIN profesores ON detalle_claves.idprof = profesores.idprof
		INNER JOIN dclaves ON detalle_claves.iddclaves = dclaves.iddclaves
		INNER JOIN empresas ON detalle_claves.idempresa = empresas.idempresa
		INNER JOIN grupos ON detalle_claves.id_grupo = grupos.id_grupo
		INNER JOIN categorias ON detalle_claves.id_categoria = categorias.id_categoria
		WHERE detalle_claves.iddclaves= ?
		ORDER BY detalle_claves.iddclaves DESC",[$request->iddclaves]);
        
		return view ('tablaregistrodetalleclaves')
		->with('detalle_clavesdb',$detalle_clavesdb);
    }





}