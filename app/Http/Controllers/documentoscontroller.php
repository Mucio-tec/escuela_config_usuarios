<?php

namespace documentoscontroller\Http\Controllers;

use Illuminate\Http\Request;
use documentoscontroller\Http\Requests;
use documentoscontroller\documentos;
use Validator;
use Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use documentoscontroller\Http\Requests\updateniveles;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;


class documentoscontroller extends Controller
{
    public function altadocumento(){

        $clavequesigue = documentos::all()->last()->idd;
        $idd = $clavequesigue+1;

        return view('altadocumento',compact('idd'));
    } 
    public function guardadocumento(Request $request){
       
        //dd( $request->all() );

        //echo Request::fullUrl();

        
        if($request->hasFile('documento')){

            $this->validate($request,[
                //'id_niv'=>['required'],
                'documento'=>'required|mimes:pdf,',
            ]);

            $file = $request->file('documento')->getClientOriginalName();

            //dd($file);
            //$documentos= time().$file->getClientOriginaName();
            $destination = public_path() . '/download';

            $request->file('documento')->move($destination, $file);

            $documentos= new documentos;
            $documentos->documento= $file;
            $documentos->ruta = $destination;
            $fecha = $request->fecha;
            $descripcion=$request->descripcion;
            $documentos->save();

        }
        
        //$idd = $request->idd;
        $documentos = $request->documento;
        
        $this->validate($request,[
            //'id_niv'=>['required'],
            'documento'=>'required|mimes:pdf',
            'fecha'=>'required|date',
            
        ]);

        $documentos= new documentos;
        $documentos->documento= $documentos;
        $documentos->fecha = $request->fecha;
        $documentos->descripcion=$request->descripcion;
        $documentos->save();
            
        if($documentos->save() ){
            return redirect()->route('reportedocumentos')->with('exito','Documento Cargado correctamente');
        }
         
    }
    public function reportedocumentos(Request $request){
        $clavequesigue = documentos::all()->last()->idd;
        $lastdocumento = $clavequesigue+1;
        $documentos = documentos::all();
        //dd($lastalumno);
      return view ('reportedocumentos',compact('documentos','lastdocumento') );
}
public function informacion(Request $request){
    $clavequesigue = documentos::all()->last()->idd;
    $lastdocumento = $clavequesigue+1;
    $documentos = documentos::all();
    //dd($lastalumno);
  return view ('informacion',compact('documentos','lastdocumento') );
}
public function borradocumento($idd)
{       
    $hdocumentos= \DB:: UPDATE("update documentos set activo = 'no' where idd= $idd");
    Session::flash('exito', 'Documento ha sido desactivo');
      return redirect()->route('reportedocumentos');
}
public function activardocumento($idd)
    {
      //dd($idh);
      /*
      $horarios= \DB:: UPDATE("update horarios set activo = 'si' where idh= $idh");

      */
      $documentos =documentos ::where('idd','=',$idd)->update([
        'activo'=>'si'
      ]);
      Session::flash('exito', 'Documento ha sido activado');
      return redirect()->route('reportedocumentos');

       }
  public function edith($id){
    $edith = documentos::findOrFail($id);
    //dd($municipios);
    return view ('modificadocumentos',compact('edith') );
  
  }
  public function update(updatehorarios $request, $id){
    $update = documentos::findOrFail($id)->update( $request->all() );
    return redirect()->route('reportedocumentos')->with('exito','Horario ha sido modificado');

     
  }
 public function download()
  {
    //La carpeta donde se almacenaron los documentos es download donde se veran los documentos pdf. 
  
    $file = public_path() . '/download';
    $documento =documentos::find($documento);
    return response()->download($file);
 //dd($documento);
}
public function eliminadocumento($idd)
  {    
$documentos=documentos::findOrFail($idd);

$documentos->delete();
return redirect()->route('reportedocumentos');
  }

}


