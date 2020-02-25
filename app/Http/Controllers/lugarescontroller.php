<?php

namespace documentoscontroller\Http\Controllers;
use Illuminate\Http\Request;
use documentoscontroller\Http\Requests;
use documentoscontroller\lugares;
use Validator;
use documentoscontroller\municipios;
use Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use documentoscontroller\Http\Requests\updatelugares;
use Barryvdh\DomPDF\Facade as PDF;

class lugarescontroller extends Controller
{
  /*public function __construct()
{
    $this->middleware('auth');
}*/
    public function principal(){
        $lugares = lugares::with('municipios')->get();
        dd($lugares[0]->municipios->municipio);
          //return view('index',compact('alumnos') );
     }
        public function altalugares(){
          $clavequesigue = lugares::all()->last()->idlu;
    
        $municipios = municipios::where('activo','si')
         ->orderby('municipio','asc')
         ->get();
    
         $idlu = $clavequesigue+1;
    
        return view('altalugar',compact('idlu','municipios') );
      
          //dd($idalum);
        } 
        public function guardalugar (Request $request){
           
            //dd( $request->all() );
            $idlu = $request->idlu;
            $lugar =  $request->lugar;
            $calle = $request->calle;
            $colonia = $request->colonia;
            $num_exterior = $request->num_exterior;
            $municipios=$request->idmun;
            $activo = $request->activo;
            
          $this->validate($request,[
              'idmun'=>['required'],
              'lugar'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
              'colonia'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
              'num_exterior'=>'required|regex:/^[0-9]$/',
              'activo'=>'required'
          ]);
    
         $lugares= new lugares;
         //$lugares->idlu=$request->idlu;
         $lugares->idmun =$request->idmun;
         $lugares->lugar=$request->lugar;
         $lugares->calle=$request->calle;
         $lugares->colonia=$request->colonia;
         $lugares->num_exterior=$request->num_exterior;
         $lugares->activo = $activo;
         $lugares->save();
         
          
            if($lugares->save() ){
              return redirect()->route('reportelugares')->with('exito','Lugar  dado de alta');
            }
           
        }
        
          public function reportelugares(Request $request){
            $clavequesigue = lugares::all()->last()->idalum;
            $lastlugares = $clavequesigue+1;
            $lugares = lugares::all();
            //dd($lastalumno);
          return view ('reportelugares',compact('lugares','lastlugares') );
          
          
        }
        public function borralugar($idlu)
    {       
	        $lugares= \DB:: UPDATE("update lugares set activo = 'no' where idlu= $idlu");
          Session::flash('exito', 'Lugar ha sido desactivo');
            return redirect()->route('reportelugares');
    }
    public function activarlugar($idlu)
          {
            //dd($idlu);
            /*
	          $lugares= \DB:: UPDATE("update lugares set activo = 'si' where idlu= $idlu");

            */
            $lugares = lugares::where('idlu','=',$idlu)->update([
              'activo'=>'si'
            ]);
            Session::flash('exito', 'Lugar ha sido activado');
            return redirect()->route('reportelugares');

       			}
        public function edit($id){
          $edit = lugares::findOrFail($id);
          $municipios = \DB::table('municipios')->where('idmun','<>',$edit->municipios->idmun)->get();
          //dd($municipios);
          return view ('modificalugar',compact('municipios','edit') );
        
        }
        public function update(updatelugares $request, $id){
          $update = lugares::findOrFail($id)->update( $request->all() );
          return redirect()->route('reportelugares')->with('exito','Lugar ha sido modificado');
     
        }
        public function exportl(){
          $lugares=lugares::get();
          $pdf = PDF::loadView('pdf.lugares', compact('lugares'));
      
          return $pdf->download('lugares.pdf');
      
        }
}
