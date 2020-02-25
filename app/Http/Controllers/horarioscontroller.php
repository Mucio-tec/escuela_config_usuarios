<?php

namespace documentoscontroller\Http\Controllers;
use Illuminate\Http\Request;
use documentoscontroller\Http\Requests;
use documentoscontroller\horarios;
use Validator;
use Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use documentoscontroller\Http\Requests\updatehorarios;
use Barryvdh\DomPDF\Facade as PDF;

class horarioscontroller extends Controller
{
  /*public function __construct()
{
    $this->middleware('auth');
}*/
  public function altahorario(){
    $clavequesigue = horarios::all()->last()->idh;
   $idh = $clavequesigue+1;

  return view('altahorario',compact('idh') );

    //dd($idh);
  } 
  public function guardahorario (Request $request){
     
      //dd( $request->all() );
      $idh = $request->idh;
      $horario =  $request->horario;
      $horas = $request->horas;
      $activo = $request->activo;
      
    $this->validate($request,[
        'horario'=>['required'],
        'horas'=>['required'],
        'activo'=>'required'
    ]);

   $horarios= new horarios;
   //$lugares->idlu=$request->idlu;
   $horarios->horario=$request->horario;
   $horarios->horas=$request->horas;
   $horarios->activo = $activo;
   $horarios->save();
   
    
      if($horarios->save() ){
        return redirect()->route('reportehorario')->with('exito','Horario  dado de alta');
      }
     
  }
  
    public function reportehorario(Request $request){
      $clavequesigue = horarios::all()->last()->idh;
      $lasthorario = $clavequesigue+1;
      $horarios = horarios::all();
      //dd($lastalumno);
    return view ('reportehorario',compact('horarios','lasthorario') );
    
    
  }
  public function borrahorario($idh)
{       
    $horarios= \DB:: UPDATE("update horarios set activo = 'no' where idh= $idh");
    Session::flash('exito', 'Horario ha sido desactivo');
      return redirect()->route('reportehorario');
}
public function activarhorario($idh)
    {
      //dd($idh);
      /*
      $horarios= \DB:: UPDATE("update horarios set activo = 'si' where idh= $idh");

      */
      $horarios =horarios ::where('idh','=',$idh)->update([
        'activo'=>'si'
      ]);
      Session::flash('exito', 'Lugar ha sido activado');
      return redirect()->route('reportehorario');

       }
  public function edith($id){
    $edith = horarios::findOrFail($id);
    //dd($municipios);
    return view ('modificahorario',compact('edith') );
  
  }
  public function update(updatehorarios $request, $id){
    $update = horarios::findOrFail($id)->update( $request->all() );
    return redirect()->route('reportehorario')->with('exito','Horario ha sido modificado');

     
  }
  public function exporth(){
    $horarios=horarios::get();
    $pdf = PDF::loadView('pdf.horarios', compact('horarios'));

    return $pdf->download('horarios.pdf');

  }
}


