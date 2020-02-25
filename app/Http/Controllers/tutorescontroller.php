<?php

namespace documentoscontroller\Http\Controllers;
use Illuminate\Http\Request;
use documentoscontroller\tutores;
use Validator;
use documentoscontroller\municipios;
use Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use documentoscontroller\Http\Requests\updatetutores;
use Barryvdh\DomPDF\Facade as PDF;

class tutorescontroller extends Controller
{
  /*public function __construct()
{
    $this->middleware('auth');
}*/
    public function principal(){
        $tutores = tutores ::with('municipios')->get();
        dd($tutores[0]->municipios->municipio);
          //return view('index',compact('alumnos') );
     }
        public function altatutores(){

          $clavequesigue = tutores::all()->last()->idtut;
          $municipios = municipios::where('activo','si')
           ->orderby('municipio','asc')
           ->get();
         $idtut = $clavequesigue+1;
    
        return view('altatutores',compact('idtut','municipios') );
      
          //dd($idalum);
        } 
        public function guardatutor (Request $request){
           
            //dd( $request->all() );
            
            $idtut = $request->idtut;
            $nombre =  $request->nombre;
            $ap_emp = $request->ap_emp;
            $am_emp = $request->am_emp;
            $edad = $request->edad;
            $calle = $request->calle;
            $num_calle = $request->num_calle;
            $colonia = $request->colonia;
            $telefono = $request->telefono;
            $cp =$request->cp;
            $correo = $request->correo;
            $sexo = $request -> sexo;
            $municipios=$request->idmun;
            $activo = $request->activo;
            
            
          $this->validate($request,[
            'idmun'=>'required',
            'nombre'=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/',
            'ap_emp'=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/',
            'am_emp'=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/',
            'edad'=>'required|regex:/^[0-9]{2}$/',
            'calle'=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/',
            'num_calle'=>'required|numeric',
            'colonia'=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/',
            'telefono'=>'required|regex:/^[0-9]{10}$/',
            'cp'=>'required|regex:/^[0-9]{5}$/',
            'correo'=>'required',
            'activo'=>'required',
            'sexo'=>'required',
              
          ]);
    
         $tutores= new tutores;
         //$tutores->idatut=$request->idtut;
         $tutores->idmun =$request->idmun;
         $tutores->nombre=$request->nombre;
         $tutores->ap_emp=$request->ap_emp;
         $tutores->am_emp=$request->ap_emp;
         $tutores->edad=$request->edad;
         $tutores->calle=$request->calle;
         $tutores->num_calle=$request->num_calle;
         $tutores->colonia=$request->colonia;
         $tutores->telefono=$request->telefono;
         $tutores->cp = $request->cp;
         $tutores->correo = $request->correo;
         $tutores->sexo = $request->sexo;
         $tutores->activo = $activo;
         $tutores->save();
         
          //return view ('altaalumno');
            if($tutores->save() ){
              return redirect()->route('reportetutor')->with('exito','El tutor ha sido dado de alta');
            }
           
        }
        public function mtutor(){
          
          $this->validate($request,[
            'idalumn'=>'required|numeric',
            'nombre'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'ap_emp'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'am_emp'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'edad'=>'required|integer',
            'calle'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'num_calle'=>['required|integer'],
            'colonia'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'telefono'=>['regex:/^[0-9]{10}$/'],
            'cp'=>['regex:/^[0-9]{5}$/'],
            'correo'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'sexo'=>['regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$/'],
            'idmun'=>['required'],
            'activo'=>['required'],
        
          ]);
         $tutores-> idtut::find($request->idtut);
         $tutores->idmun =$request->idmun;
         $tutores->nombre=$request->nombre;
         $tutores->ap_emp=$request->ap_emp;
         $tutores->am_emp=$request->ap_emp;
         $tutores->edad=$request->edad;
         $tutores->calle=$request->calle;
         $tutores->num_calle=$request->num_calle;
         $tutores->colonia=$request->colonia;
         $tutores->telefono=$request->telefono;
         $tutores->cp->$request->cp;
         $tutores->correo->request->correo;
         $tutores->sexo->$request->sexo;
         $tutores->activo = $activo;
         $tutores->save();
         
         
         Session::flash('exito', "El tutor $request->nombre ha sido dado modificado correctamente");
               return redirect()->route("reportetutor");
    
        }
    
    
          public function reportetutor(Request $request){
            $clavequesigue = tutores::all()->last()->idtut;
            $lasttutor = $clavequesigue+1;
            $tutores = tutores::all();
            //dd($lastalumno);
          return view ('reportetutor',compact('tutores','lasttutor') );
          
          
        }
        public function borratutor($idtut)
    {       
	        $tutores= \DB:: UPDATE("update tutores set activo = 'no' where idtut= $idtut");
          Session::flash('exito', 'Tutor ha sido desactivado');
            return redirect()->route('reportetutor');
    }
    public function activartutor($idtut)
          {
            $tutores = tutores::where('idtut','=',$idtut)->update([
              'activo'=>'si'
            ]);
            Session::flash('exito', 'Tutor ha sido activado');
            return redirect()->route('reportetutor');

       			}
        //}
        public function editt($id){
          $editt = tutores::findOrFail($id);
          $municipios = \DB::table('municipios')->where('idmun','<>',$editt->municipios->idmun)->get();
          //dd();
          return view ('modificatutor',compact('municipios','editt') );
        }
        public function update(updatetutores $request, $id){
          $update = tutores::findOrFail($id)->update( $request->all() );
          return redirect()->route('reportetutor')->with('exito','Lugar ha sido modificado');
      
        }
        public function exporttutores(){
          $tutores=tutores::get();
          $pdf = PDF::loadView('pdf.tutores', compact('tutores'));
    
          return $pdf->download('tutores.pdf');
    
        }
    
    
    
    }
    
