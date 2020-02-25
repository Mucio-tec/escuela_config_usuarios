<?php
namespace documentoscontroller\Http\Controllers;

use Illuminate\Http\Request;

use documentoscontroller\Http\Requests;
use documentoscontroller\profesores;
use documentoscontroller\alumnos;
use documentoscontroller\lugares;
use documentoscontroller\modulos;
use documentoscontroller\niveles;
use documentoscontroller\empresas;
use documentoscontroller\grupos;
use documentoscontroller\horarios;
use documentoscontroller\categorias;
use documentoscontroller\detalle_grupos;
use documentoscontroller\detalle_claves;
use documentoscontroller\dgrupos;
use documentoscontroller\dclaves;
use PDF;

use Session;

class controladoralumno extends Controller
{
	////-----
	/*public function __construct()
	{
		$this->middleware('auth');
	}*/
	////-----
   
  public function alumno()
    {
		$clavequesiguedc = dgrupos::orderBy('iddgrupos','desc')
            ->take(1)
			->get();
		$cuantos = count($clavequesiguedc);

        if ($cuantos==0)
                {
              $iddgrupos = 1;
               }
               else
               {
                $iddgrupos = $clavequesiguedc[0]->iddgrupos+1;
               }
			   
			   $profesores = profesores::where('activo','=','si')
	                      ->orderBy('idprof','asc')
						  ->get();
				$alumnos = alumnos::where('activo','=','si')
	                      ->orderBy('idalum','asc')
						  ->get();
				$modulos = modulos::where('activo','=','si')
	                      ->orderBy('idmod','asc')
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
		
            return view ("asignacionalumno")
			->with('iddgrupos',$iddgrupos)
			->with('profesores',$profesores)
			->with('alumnos',$alumnos)
			->with('modulos',$modulos)
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
	
		 public function obtienedatosalumno(Request $request)
    {
         $idalum = $request->get('idalum');
         $alumnos = alumnos::where('idalum','=',$idalum)->get();
         return view ('datosalumnos')->with('alumnos',$alumnos);
    }
	
	 public function guardarasignaciongrupo(Request $request)
    {
		$dgrupos = dgrupos::where('iddgrupos',$request->iddgrupos)->get();
       
		$cuantos = count($dgrupos);
	
        if($cuantos==0){
			$dgrupos = new dgrupos;
			$dgrupos->iddgrupos = $request->iddgrupos;
			//$dgrupos->id_categoria = $request->id_categoria;
			$dgrupos->save();
			
			$detalle_grupos = new detalle_grupos;
			$detalle_grupos->id_dgrupo = $request->id_dgrupo;
			$detalle_grupos->id_niv = $request->id_niv;
			$detalle_grupos->idmod = $request->idmod;
			$detalle_grupos->id_categoria = $request->id_categoria;
			$detalle_grupos->idempresa = $request->idempresa;
			$detalle_grupos->id_grupo = $request->id_grupo;
			$detalle_grupos->idh = $request->idh;
			$detalle_grupos->idalum = $request->idalum;
			$detalle_grupos->iddgrupos = $request->iddgrupos;
			$detalle_grupos->save();
		}else{
			$detalle_grupos = new detalle_grupos;
			$detalle_grupos->id_dgrupo = $request->id_dgrupo;
			$detalle_grupos->id_niv = $request->id_niv;
			$detalle_grupos->idmod = $request->idmod;
			$detalle_grupos->id_categoria = $request->id_categoria;
			$detalle_grupos->idempresa = $request->idempresa;
			$detalle_grupos->id_grupo = $request->id_grupo;
			$detalle_grupos->idh = $request->idh;
			$detalle_grupos->idalum = $request->idalum;
			$detalle_grupos->iddgrupos = $request->iddgrupos;
			$detalle_grupos->save();
		}

		$detalle_grupos=\DB::select("SELECT * FROM detalle_grupos
		INNER JOIN niveles ON detalle_grupos.id_niv = niveles.id_niv
		INNER JOIN modulos ON detalle_grupos.idmod = modulos.idmod
		INNER JOIN categorias ON detalle_grupos.id_categoria = categorias.id_categoria
		INNER JOIN empresas ON detalle_grupos.idempresa = empresas.idempresa
		INNER JOIN grupos ON detalle_grupos.id_grupo = grupos.id_grupo
		INNER JOIN horarios ON detalle_grupos.idh = horarios.idh
		INNER JOIN alumnos ON detalle_grupos.idalum = alumnos.idalum
		INNER JOIN dgrupos ON detalle_grupos.iddgrupos = dgrupos.iddgrupos
		WHERE detalle_grupos.iddgrupos= ?
		ORDER BY detalle_grupos.iddgrupos DESC",[$request->iddgrupos]);

		return view ('tablaalumnos')
			->with('detalle_grupos',$detalle_grupos);
			
    }
	
	public function reportegrupo()
	{
		 $grupos = grupos::where('activo','=','si')
	                      ->orderBy('id_grupo','asc')
						  ->get();
		
		  			 	$resultado=\DB::select("SELECT * FROM detalle_grupos, niveles,modulos, categorias,empresas, grupos, horarios, alumnos
WHERE detalle_grupos.id_niv = niveles.id_niv
 AND detalle_grupos.idmod = modulos.idmod 
 AND detalle_grupos.id_categoria = categorias.id_categoria
AND detalle_grupos.idempresa = empresas.idempresa 
AND detalle_grupos.id_grupo = grupos.id_grupo
AND detalle_grupos.idh = horarios.idh
AND detalle_grupos.idalum = alumnos.idalum
ORDER BY detalle_grupos.id_dgrupo;");
				  return view('reportess')
				  ->with('detalle_grupos',$resultado)
				  ->with('grupos',$grupos);   
        }
        	
	function filtrogrupo(Request $request)
    {
        $id_grupo = $request->get('id_grupo');
        $detalle_grupos = detalle_grupos::where('id_grupo','=',$id_grupo)->get();
        
        return view ('reportegrupo')
		->with('detalle_grupos',$detalle_grupos);
    }
	
	
	



	public function exporta(){
		$resultado=\DB::select("SELECT * FROM detalle_grupos, niveles,modulos, categorias,empresas, grupos, horarios, alumnos
		WHERE detalle_grupos.id_niv = niveles.id_niv
		 AND detalle_grupos.idmod = modulos.idmod 
		 AND detalle_grupos.id_categoria = categorias.id_categoria
		AND detalle_grupos.idempresa = empresas.idempresa 
		AND detalle_grupos.id_grupo = grupos.id_grupo
		AND detalle_grupos.idh = horarios.idh
		AND detalle_grupos.idalum = alumnos.idalum
		ORDER BY detalle_grupos.id_niv");

		$pdf = PDF::loadView('pdf.grupos', compact('resultado'));
	
		return $pdf->download('Grupo.pdf');
	
	  }

	  public function exportbasico(){

		$resultadoa=\DB::select("SELECT * FROM detalle_grupos, niveles,modulos, categorias,empresas, grupos, horarios, alumnos
		WHERE detalle_grupos.id_niv = niveles.id_niv
		AND grupos.id_grupo='1'
		 AND detalle_grupos.idmod = modulos.idmod 
		 AND detalle_grupos.id_categoria = categorias.id_categoria
		AND detalle_grupos.idempresa = empresas.idempresa 
		AND detalle_grupos.id_grupo = grupos.id_grupo
		AND detalle_grupos.idh = horarios.idh
		AND detalle_grupos.idalum = alumnos.idalum
		ORDER BY detalle_grupos.id_dgrupo;
		");
		//dd($resultado);

		  
		$pdf = PDF::loadView ('pdf.nivelbasico', compact('resultadoa') );  
		return $pdf->download('Reporte_nivel_basico.pdf');


	
	}


	public function exportados(){

		$resultadoados=\DB::select("SELECT * FROM detalle_grupos, niveles,modulos, categorias,empresas, grupos, horarios, alumnos
		WHERE detalle_grupos.id_niv = niveles.id_niv
		AND grupos.id_grupo='2'
		 AND detalle_grupos.idmod = modulos.idmod 
		 AND detalle_grupos.id_categoria = categorias.id_categoria
		AND detalle_grupos.idempresa = empresas.idempresa 
		AND detalle_grupos.id_grupo = grupos.id_grupo
		AND detalle_grupos.idh = horarios.idh
		AND detalle_grupos.idalum = alumnos.idalum
		ORDER BY detalle_grupos.id_dgrupo;
		");
		//dd($resultado);

		  
		$pdf = PDF::loadView ('pdf.nivelA2', compact('resultadoados') );  
		return $pdf->download('Reporte_nivel_A2.pdf');


	
	}

	public function exportatres(){

		$resultadoatres=\DB::select("SELECT * FROM detalle_grupos, niveles,modulos, categorias,empresas, grupos, horarios, alumnos
		WHERE detalle_grupos.id_niv = niveles.id_niv
		AND grupos.id_grupo='3'
		 AND detalle_grupos.idmod = modulos.idmod 
		 AND detalle_grupos.id_categoria = categorias.id_categoria
		AND detalle_grupos.idempresa = empresas.idempresa 
		AND detalle_grupos.id_grupo = grupos.id_grupo
		AND detalle_grupos.idh = horarios.idh
		AND detalle_grupos.idalum = alumnos.idalum
		ORDER BY detalle_grupos.id_dgrupo;
		");
		//dd($resultado);

		  
		$pdf = PDF::loadView ('pdf.nivelA3', compact('resultadoatres') );  
		return $pdf->download('Reporte_nivel_A3.pdf');


	
	}



















	public function borraregistroalumno(Request $request)
    {
		$id_venta = detalle_grupos::where('id_venta',$request->id_venta)->get();
     	$iddgrupos = detalle_grupos::where('iddgrupos',$request->iddgrupos)->get();
		
		$borrarregistrolistaalumno=\DB::delete("DELETE FROM detalle_grupos 
		WHERE id_dgrupo = ?", [$request->id_dgrupo]);

		 //detalle_grupos::find($request->id_dgrupo)->delete();
         ////////////////////////////
     	//echo "borradgrupos con clave $request->idvd con venta $idv ";
		$detalle_grupos=\DB::select("SELECT * FROM detalle_grupos
		INNER JOIN niveles ON detalle_grupos.id_niv = niveles.id_niv
		INNER JOIN modulos ON detalle_grupos.idmod = modulos.idmod
		INNER JOIN categorias ON detalle_grupos.id_categoria = categorias.id_categoria
		INNER JOIN empresas ON detalle_grupos.idempresa = empresas.idempresa
		INNER JOIN grupos ON detalle_grupos.id_grupo = grupos.id_grupo
		INNER JOIN horarios ON detalle_grupos.idh = horarios.idh
		INNER JOIN alumnos ON detalle_grupos.idalum = alumnos.idalum
		INNER JOIN dgrupos ON detalle_grupos.iddgrupos = dgrupos.iddgrupos
		WHERE detalle_grupos.iddgrupos= ?
		ORDER BY detalle_grupos.iddgrupos DESC",[$request->iddgrupos]);
        
		return view ('tablaalumnos')
		->with('detalle_grupos',$detalle_grupos);
    }
}