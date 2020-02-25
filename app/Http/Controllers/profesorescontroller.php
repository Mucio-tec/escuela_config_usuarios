<?php

namespace documentoscontroller\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use documentoscontroller\profesores;
use documentoscontroller\municipios;
use Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use documentoscontroller\Http\Requests\updateprofesores;
use Barryvdh\DomPDF\Facade as PDF;

class profesorescontroller extends Controller
{
  /*public function __construct()
{
    $this->middleware('auth');
}*/
    public function principal(){
        $profesores = profesores::with('municipios')->get();
        dd($profesores[0]->municipios->municipio);
    //return view('index',compact('alumnos') );
     }
        public function altaprofesor(){
          $clavequesigue = profesores::all()->last()->idprof;
    
        $municipios = municipios::where('activo','si')
         ->orderby('municipio','asc')
         ->get();
         $idprof = $clavequesigue+1;
    
        return view('altaprofesor',compact('idprof','municipios') );
      
          //dd($idalum);
        } 
        public function guardaprofesor (Request $request){
           
            //dd( $request->all() );
            
            $idprof = $request->idprof;
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
            'correo'=>'required|email',
            'activo'=>'required',
            'sexo'=>'required|regex:/^[A-Z][A-Z,a-z, ,ñ,é,ó,á,í,ú]+$',
    
              
          ]);
    
         $profesores= new profesores;
         //$alumnos->idalum=$request->idalum;
         $profesores->idmun =$request->idmun;
         $profesores->nombre=$request->nombre;
         $profesores->ap_emp=$request->ap_emp;
         $profesores->am_emp=$request->ap_emp;
         $profesores->edad=$request->edad;
         $profesores->calle=$request->calle;
         $profesores->num_calle=$request->num_calle;
         $profesores->colonia=$request->colonia;
         $profesores->telefono=$request->telefono;
         $profesores->cp = $request->cp;
         $profesores->correo = $request->correo;
         $profesores->sexo = $request->sexo;
         $lugares->activo = $activo;
         $profesores->save();
         
          //return view ('altaalumno');
            if($profesores->save() ){
              return redirect()->route('reporteprofesor')->with('exito','El profesor ha sido dado de alta');
            }
           
        }
        public function mprof(){
          
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
            'idmun'=>'required'
        
          ]);
         $profesores-> idprof::find($request->idprof);
         $profesores->idmun =$request->idmun;
         $profesores->nombre=$request->nombre;
         $profesores->ap_emp=$request->ap_emp;
         $profesores->am_emp=$request->ap_emp;
         $profesores->edad=$request->edad;
         $profesores->calle=$request->calle;
         $profesores->num_calle=$request->num_calle;
         $profesores->colonia=$request->colonia;
         $profesores->telefono=$request->telefono;
         $profesores->cp->$request->cp;
         $profesores->correo->request->correo;
         $profesores->sexo->$request->sexo;
         $lugares->activo = $activo;
         $profesores->save();
         
         
         Session::flash('exito', "El Profesor  $request->nombre ha sido dado modificado correctamente");
               return redirect()->route("reporteprofesor");
    
        }
    
      
          public function reporteprofesor(Request $request){
            $clavequesigue = profesores::all()->last()->idprof;
            $lastprofesores = $clavequesigue+1;
            $profesores = profesores::all();
            //dd($lastalumno);
          return view ('reporteprofesor',compact('profesores','lastprofesores') );
          
          
        }
        public function borraprofesor($idprof)
        {       
              $profesores= \DB:: UPDATE("update profesores set activo = 'no' where idprof= $idprof");
              Session::flash('exito', 'Profesor  ha sido desactivo');
                return redirect()->route('reporteprofesor');
        }
        public function activarprofesor($idprof)
              {
                //dd($idlu);
                /*
                $lugares= \DB:: UPDATE("update lugares set activo = 'si' where idlu= $idlu");
    
                */
                $profesores = profesores::where('idprof','=',$idprof)->update([
                  'activo'=>'si'
                ]);
                Session::flash('exito', 'Profesor ha sido activado');
                return redirect()->route('reporteprofesor');
    
                 }
        public function editp($id){
          $editp = profesores::findOrFail($id);
          $municipios = \DB::table('municipios')->where('idmun','<>',$editp->municipios->idmun)->get();
          //dd();
          return view ('modificaprofesor',compact('municipios','editp') );
        }
        public function update(updateprofesores $request, $id){
          $update = profesores::findOrFail($id)->update( $request->all() );
          return redirect()->route('reporteprofesor')->with('exito','Profesor ha sido modificado');
        }

        public function exportp(){
          $profesores=profesores::get();
          $pdf = PDF::loadView('pdf.profesores', compact('profesores'));
    
          return $pdf->download('informe_profesores.pdf');
    
        }
    
}

