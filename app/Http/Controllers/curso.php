<?php

namespace documentoscontroller\Http\Controllers;
use Illuminate\Http\Request;

use documentoscontroller\Http\Requests;
use documentoscontroller\alumnos;
use Validator;
use documentoscontroller\municipios;
use Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

use documentoscontroller\Http\Requests\updatealumnos;


class curso extends Controller
{
  /*public function __construct()
  {
      $this->middleware('auth');
  }*/
  public function principal(){
    $alumnos = alumnos::with('municipios')->get();
    dd($alumnos[0]->municipios->municipio);
	  //return view('index',compact('alumnos') );
 }
    public function altaalumno(){
      $clavequesigue = alumnos::all()->last()->idalum;

    $municipios = municipios::where('activo','si')
     ->orderby('municipio','asc')
     ->get();

     $idalum = $clavequesigue+1;

    return view('altaalumno',compact('idalum','municipios') );
  
      //dd($idalum);
    } 
    public function guardaalumno (Request $request){
       
        //dd( $request->all() );
        
        $idalum = $request->idalum;
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

     $alumnos= new alumnos;
     $alumnos->idalum=$request->idalum;
     $alumnos->idmun =$request->idmun;
     $alumnos->nombre=$request->nombre;
     $alumnos->ap_emp=$request->ap_emp;
     $alumnos->am_emp=$request->ap_emp;
     $alumnos->edad=$request->edad;
     $alumnos->calle=$request->calle;
     $alumnos->num_calle=$request->num_calle;
     $alumnos->colonia=$request->colonia;
     $alumnos->telefono=$request->telefono;
     $alumnos->cp = $request->cp;
     $alumnos->correo = $request->correo;
     $alumnos->sexo = $request->sexo;
     $alumnos->activo = $activo;
     $alumnos->save();
     
      //return view ('altaalumno');
        if($alumnos->save() ){
          return redirect()->route('reportealumnos')->with('exito','El alumno ha sido dado de alta');
        }
       
    }
  

          public function reportealumnos(Request $request){
        $clavequesigue = alumnos::all()->last()->idalum;
        $lastalumno = $clavequesigue+1;
        $alumnos = alumnos::all();
        //dd($lastalumno);
      return view ('reportealumnos',compact('alumnos','lastalumno') );
      
      
    }
    public function borraalumno($idalum)
{
  $alumnos= \DB:: UPDATE("update alumnos set activo = 'no' where idalum= $idalum");
  Session::flash('exito', 'alumno ha sido desactivo');
    return redirect()->route('reportealumnos');
       			}
    public function restauraralumno($idalum)
    {
      $alumnos = alumnos::where('idalum','=',$idalum)->update([
        'activo'=>'si'
      ]);

      Session::flash('exito', 'Alumno ha sido activado');
      return redirect()->route('reportealumnos');
    }
    public function edita($id){
     $edita = alumnos::findOrFail($id);    
     $municipios = \DB::table('municipios')->where('idmun','<>',$edita->municipios->idmun)->get();
      //dd($request->all());
     
    return view ('modificaalumnos',compact('municipios','edita') );

    }
    public function update(updatealumnos $request, $id){
      $update = alumnos::findOrFail($id)->update( $request->all() );
      return redirect()->route('reportealumnos')->with('exito','alumno ha sido modificado');
    }
   
    public function exportpdf(){
      $alumnos=alumnos::get();
      $pdf = PDF::loadView('pdf.alumnos', compact('alumnos'));

      return $pdf->download('alumnos.pdf');

    }



}





